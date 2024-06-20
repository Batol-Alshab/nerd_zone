<?php

namespace App\Http\Controllers\Api;

use Carbon\carbon;
use App\Models\User;
use Monolog\Registry;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;

use Tymon\JWTAuth\Facades\JWTFactory;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Contracts\Providers\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    use ApiResponse;

    public function register(RegisterRequest $request)
    {
        try {

            $user = User::create([
                'fname' => $request->fname,
                'lname' => $request->lname,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'phone_number' => $request->phone_number ?? null,
                'sex' => $request->sex,
                'section_id' => $request->section_id
            ]);
            $token = JWTAuth::fromUser($user);

            $data = [
                // 'id' => $user->id,
                'fname' => $user->fname,
                'lname' => $user->lname,
                'email' => $user->email,
                'phone_number' =>  $user->phone_number,
                'sex' => $user->sex,
                'section_id' => $user->section_id,
                'rate' => $user->rate,
                'token' => $token
            ];

            return $this->successResponse($data, 'تم إنشاء حسابك بنجاح', 201);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage());
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials, ['exp' => carbon::now()->addDays(7)->timestamp])) {
                return $this->errorResponse('الإيميل أو كلمة المرور غير صحيحة');
            }
        } catch (JWTException $e) {
            return $this->errorResponse($e->getMessage());
        }
        $user = JWTAuth::user();

        // $token = JWTAuth::fromUser($user);
        // $token = JWTAuth::factory()->setTTL(60 * 24 * 7)->get();

        $data = [
            'fname' => $user->fname,
            'lname' => $user->lname,
            'email' => $user->email,
            'phone_number' => $user->phone_number,
            'sex' => $user->sex,
            'section_id' => $user->section_id,
            'rate' => $user->rate,
            'token' => $token
        ];


        return $this->successResponse($data, "تم تسجيل الدخول بنجاح", 200);
    }


    public function logout(Request $request)
    {
        $token = JWTAuth::parseToken()->getToken();
        JWTAuth::invalidate($token);
        return response()->json(['message' => 'تم تسجيل الخروج بنجاح']);
    }

    // public function refresh()
    // {
    //     $token = JWTAuth::parseToken()->refresh();
    //     return response()->json(['access_token' => $token]);
    // }

    public function getUser(Request $request)
    {
        // $this->validate($request, [
        //     'token' => 'required'
        // ]);

        $user = JWTAuth::authenticate($request->token);

        return $this->successResponse(new UserResource($user), 'تمت العملية بنجاح', 200);
    }
}
