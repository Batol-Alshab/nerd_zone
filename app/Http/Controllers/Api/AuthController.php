<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Monolog\Registry;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
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
            // $token=md5(time()).'-'.md5($request->email);

            $data = [
                // 'id' => $user->id,
                'fname' => $user->fname,
                'lname' => $user->lname,
                'email' => $user->email,
                'phone_number' =>  $user->phone_number,
                'sex' => $user->sex,
                'section_id' => $user->section_id,
                'token' => $token
            ];

            return $this->successResponse($data, ' user successfully registered', 201);
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return $this->errorResponse($e->getMessage());
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!JWTAuth::attempt($credentials))
            // if (!($credentials))

             {
                return $this->errorResponse('error Invalid credentials');
            }
        } catch (JWTException $e) {
            return $this->errorResponse($e->getMessage());
        }
        $user = JWTAuth::user();
        // $token=md5(time()).'-'.md5($request->email);
        $token = JWTAuth::fromUser($user);

        $data = [
            // 'id' => $user->id,
            'fname' => $user->fname,
            'lname' => $user->lname,
            'email' => $user->email,
            'phone_number' => $user->phone_number,
            'sex' => $user->sex,
            'section_id' => $user->section_id,
            'token' => $token
        ];


        return $this->successResponse($data, "User successfully logged", 200);
    }


    public function logout(Request $request)
    {
        $token = JWTAuth::parseToken()->getToken();
        JWTAuth::invalidate($token);
        return response()->json(['message' => 'Logged out successfully']);
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

        return $this->successResponse(new UserResource($user),'successfully',200);
    }
}
