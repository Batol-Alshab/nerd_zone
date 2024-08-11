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
use App\Http\Resources\SummeryResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

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
        // $user = Auth::user();
        // $user = User::with('favouritesummeries')->findOrFail($user->id);

        // return $this->successResponse(new UserResource($user), 'User information retrieved successfully', 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        if($user)
        {
            try {
                $validator = $request->validate([
                    // 'fname' => 'nullable|regex:/^[^0-9][a-zA-Z0-9\s]*$/|string',
                    'fname' => 'nullable|regex:/^[\p{Arabic}a-zA-Z]+[\p{Arabic}a-zA-Z0-9\s]*$/u|string',
                    'lname' => 'nullable|regex:/^[\p{Arabic}a-zA-Z]+[\p{Arabic}a-zA-Z0-9\s]*$/u|string',
                    'phone' => 'nullable|string|regex:/^09\d{8}$/',
                    // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
                    'opinion' =>'nullable|string|max:100'
                ]);            
                   
                // if ($request->hasFile('image')) {
                //     $url = $user->image;
                //     if($url != 'http://127.0.0.1:8000/images/profile_image/profile.jpg')
                //     {
                //         $image_url = parse_url($url);
                //         $image_url = $image_url['path'];
                //         File::delete(public_path($image_url));
                //     }  
                //     $path=$this->uploadAll($request,'images/','profile_image/');
                // }
                $user->update([
                    'lname' =>  $request->lname ?? $user->lname,
                    'fname' =>  $request->fname ?? $user->fname,
                    'phone_number' => $request->phone_number ?? $user->phone_number,
                    // 'image' =>  $path ?? $user->image,
                    'opinion' =>  $request->opinion ?? $user->opinion,
                ]);
                return $this->successResponse(new UserResource($user), 'تم تعديل الملف الشخصي بنجاح', 200);

            } catch(\Exception $e){
                return $this->errorResponse($e->getMessage(),400);
            }
        }
        else 
        {
            return $this->errorResponse('اسم المستخدم غير صحيح',400);
        }
    }

    public function updateImage(Request $request)
    {
        $user= Auth::user();
        if($user)
        {
            try {
                $validator = $request->validate([
                    'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048'
                ]);
                $url=$user->image;
                if($url != 'http://127.0.0.1:8000/images/profile_image/Male.svg' || 'http://127.0.0.1:8000/images/profile_image/Female.svg')
                    {
                        $image_url = parse_url($url);
                        $image_url = $image_url['path'];
                        File::delete(public_path($image_url));
                    }
                $path=$this->uploadAll($request,'images/','profile_image/');
                $user->update([
                    'image'=>$path
                ]);
                return $this->successResponse($user->image, 'تم تعديل الصورة بنجاح', 200);
            }catch(\Exception $e){
                return $this->errorResponse($e->getMessage(),400);
            }
        }
        else 
        {
            return $this->errorResponse('اسم المستخدم غير صحيح',400);
        }
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        if($user)
        {
            try {
                $validator = $request->validate([
                    'old_password' => 'required|string',
                    'password' => 'required|string|confirmed|min:6',
                    ]);
                    if (Hash::check($request->old_password, $user->password)) {
                        $user->update([
                            'password' => Hash::make($request->password),
                        ]);
                        return $this->successResponse(new UserResource($user), 'تم تعديل كلمة المرور بنجاح', 200);
                    } else {
                        return $this->errorResponse('كلمة المرور غير صحيحة',400);
                    }
                        
            } catch(\Exception $e){
                return $this->errorResponse($e->getMessage(),400);
            }
        }  
        else 
        {
            return $this->errorResponse('اسم المستخدم غير صحيح',400);
        } 
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {  
        $user=User::find($request->id);
        if($user && $user->id !=1){
            if (Auth::user()->hasRole('admin')){
                $url=$user->image;
                if($url != 'http://127.0.0.1:8000/images/profile_image/Male.svg' || 'http://127.0.0.1:8000/images/profile_image/Female.svg')
                    {
                        $image_url = parse_url($url);
                        $image_url = $image_url['path'];
                        File::delete(public_path($image_url));
                    }
                $user->delete();
                return $this->successResponse(null, "تم حذف المستخدم بنجاح", 200);
            }
            else{
                return $this->unauthorized();
            }
        }
        else{
            return $this->errorResponse('المستخدم غير موجود ', 400);
        }
        
    }
    public function favourite()
    {
        try{
            $user = Auth::user(); 
            if($user)
            {
                $user = User::with('favouritesummeries')->findOrFail($user->id);
                $user=SummeryResource::collection($user->favouritesummeries) ;
                return $this->successResponse($user, 'تم عرض المفضلة بنجاح', 200);
            }
        }catch(\Exception $e){
            return $this->errorResponse('اسم المستخدم غير صحيح', 400);
        }
    }
    public function profile()
    {
        try{
            $user = Auth::user(); 
            if($user)
            {
                $information=new UserResource($user);
                $material_average=[];
                $all_count=0;
                $section=Section::find($user->section_id);
                $material=Material::where('section_id',$section->id)->get();
                //=ModuleUser::where('user_id', $user->id)->count()
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
                                        $all_count+=1;
                                        $sum+=$s->percent;
                                    }
                                }
                            }
                        }
                        if($count>0){
                            $average=round($sum/$count);
                            $material_average[$m->name]=$average;
                        }
                        else{
                            $material_average[$m->name]=0;
                        }
                    }
                    //if user is nerd1@zone1.com
                    if($user->email=='nerd1@zone1.com')
                    {
                        $section=Section::find($user->section_id);
                        $material=Material::where('section_id',$section->id)->get();
                        $material_average=[];
                        $avg=[40,60,80,40,90,66,20,35,80];
                        $i=0;
                        
                            foreach($material as $m){
                                $material_average[$m->name]=$avg[$i];
                                echo $material_average[$m->name];
                                $i+=1;
                            }
                    }
                    $profile['information']=$information;
                    $profile['chart']=$material_average;
                    $profile['complete']=$all_count;
                    return $this->successResponse($profile, 'تم عرض الملف الشخصي', 200);
                 
        } 
            else
            {
                return $this->errorResponse('اسم المستخدم غير صحيح', 400);
            }
        }catch(\Exception $e){
            return $this->errorResponse('اسم المستخدم غير صحيح', 400);
        }
        
    }

}
