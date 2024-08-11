<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\StudentResource;

class AdminController extends Controller
{
    use ApiResponse;

    public function analysis()
    {
        try {
            if(Auth::user()->hasRole('admin')){
                $count_user =User::count()-1;
                $rate_user = User::where('id', '!=', 1)  
                ->orderBy('rate', 'desc')  
                ->first(); 
                $rate_user=$rate_user->fname.' '.$rate_user->lname; 
                $information['count']=$count_user;
                $information['nerd']=$rate_user;
                return $this->successResponse($information, 'تم ارجاع عدد الحسابات بنجاح', 200);
            }
            else {
                return $this->unauthorized();
            }
        } catch (JWTException $e) {
            return $this->errorResponse($e->getMessage());
        }

    }
    public function students()
   {
        $students= User::where('id', '!=', 1)->get();
        return $this->successResponse(StudentResource::collection($students),"تم ارجاع بيانات الطلاب يشكل صحيح");
   }

    public function getStudentInfo(Request $request){
        $user = User::find($request->id);  
        if($user && $user->id !=1){
            $info['fullName'] = $user ? $user->fname . ' ' . $user->lname : null;
            $info['sex']=$user->sex;
            $info['created_at'] = $user->created_at->format('Y-m-d'); // returns the date in YYYY-MM-DD format
            return $this->successResponse($info,"تم ارجاع بيانات الطالب يشكل صحيح");
        }
        else{
            return $this->errorResponse('المستخدم غير موجود');
        }

}

    }
