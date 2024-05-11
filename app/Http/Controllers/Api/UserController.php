<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    use ApiResponse;
    use FileUploader;
    public function updateRate(Request $request)
    {
            $user = Auth::user();
            $newRate = ($user->rate) + ($request->rate);
            $user->update([
                'rate' => $newRate
            ]);
            return $this->successresponse($user->rate, 'success reply', 200);
    }
    /**
     * Display a listing of the resource.
     */
// if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))){
//             $token = auth()->user()->createToken('Token name')->accessToken;
//             return response()->json(['token' => $token], 200);
//         } else {
//             // خطأ في البيانات المدخلة
//         }

    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user = Auth::user();
        $user = User::with('favouritesummeries')->findOrFail($user->id);

        return $this->successResponse(new UserResource($user), 'User information retrieved successfully', 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'string',
            'lname' => 'string',
            'password' => 'confirmed|min:6',
            'phone_number' => 'string|nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 400);
        }
        $user = Auth::user();


          if($request->email !== $user->email)

           { $validator=Validator::make($request->email,
            ['email' => 'string|email:rfc,dns|max:100|unique:users,email',
        ]);}


        if ($user) {
            if ($request->hasFile('image')) {
                $this->uploadImage($request, $user, 'profile_image', 'image');
            }

            $user->update([
                'fname' => $request->fname ?? $user->fname,
                'lname' => $request->lname?? $user->lname,
                'password' => Hash::make($request->password)?? $user->password,
                'email' => $request->email?? $user->email,
                'phone_number' => $request->phone_number?? $user->phone_number,
                'image' => $request->image?? $user->image,
                'sex' => $user->sex,
                'section_id' => $user->section_id,
                'opinion' => $request->opinion ?? $user->opinion
            ]);

            return $this->successResponse(new UserResource($user), 'your profile updated successfully', 200);
        } else {
            return $this->unauthorized();
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function getFavoriteSummaries($userId)
{
    $user = User::find($userId);
    $favoriteSummaries = $user->favoriteSummaries;

    return response()->json($favoriteSummaries);
}

}
