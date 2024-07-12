<?php

namespace App\Http\Controllers\Api;

use App\Models\Unit;
use App\Models\User;
use App\Models\Modul;
use App\Models\Section;
use App\Models\Material;
use App\Models\ModulUser;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\ModulResource;
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
    public function chart()
    {
        $user = Auth::user();     
        $section=Section::find($user->section_id);
        $materialAverage;
        $material=Material::where('section_id',$section->id)->get();
            foreach($material as $m){
                $sum=0;
                $count=0;
                $average=0;
                $unit=Unit::where('material_id',$m->id)->get();
                foreach($unit as $u){
                    $modul=Modul::where('unit_id',$u->id)->get();       
                    $count+=$modul->count();
                    foreach($modul as $mo){
                        $solution=ModulUser::where('user_id',$user->id)
                        ->where('modul_id',$mo->id)
                        ->get();
                        foreach($solution as $s){ 
                            if($s->percent > 0){
                                $sum+=$s->percent;
                            }
                        }
                    }
                }
                if($count>0){
                    $average=round($sum/$count);
                    $materialAverage[$m->name]=$average;
                }
                else{
                    $materialAverage[$m->name]=0;
                }
            }
            return $this->successResponse($materialAverage, 'chart return successfully', 200);
            // return $materialAverage;
    }

}
