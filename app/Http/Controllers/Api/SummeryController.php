<?php

namespace App\Http\Controllers\Api;

use App\Models\Unit;
use App\Models\User;
use App\Models\Summery;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\SummeryResource;
use Illuminate\Support\Facades\File;

class SummeryController extends Controller
{
    use ApiResponse;
    use FileUploader;
    public function index()
    {
        $summeries = Summery::all();
        return $this->successresponse(SummeryResource::collection($summeries), 'تم عرض كل الملخصات بنجاح', 200);
    }


    public function store(Request $request)
    {
        try{
            $validatedata = $request->validate([
                'name' => 'required|string',
                'url' => 'required|mimes:pdf|max:10240',
                'unit_id' => 'required|exists:units,id'
            ]);
            $path = $this->uploadFile($request, 'file/', 'summeries/');
            $summery = Summery::create([
                'name' => $request->name,
                'url' =>  $path,
                'unit_id' => $request->unit_id
            ]);
            return $this->successResponse(new SummeryResource($summery), 'تم إضافة ملخص بنجاح', 201);
    
        }catch(\Exception $e){
            return $this->errorResponse($e->getMessage(),400);
        }
    }


    public function show(string $id)
    {
        try{
            $summery_url = Summery::find($id);
            if($summery_url){    
                return $this->successresponse($summery_url, 'تم عرض الملخص بنجاح', 200);
        
            }else{
                return $this->errorResponse('الملخص الذي تبحث عنه غير موجود', 404);
            }
        }catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 400);
        }
    }


    public function update(Request $request, $id)
    {
        try{
            $summery = Summery::find($id);
            if($summery){
                $validatedata = $request->validate([
                    'name' => 'nullable|string',
                    'url' => 'nullable|mimes:pdf|max:10240',
                    'unit_id' => 'nullable|exists:units,id'
                ]);
                if($request->hasFile('url')){
                    $url = $summery->url;
                    $summery_url = parse_url($url);
                    $summery_url = $summery_url['path'];
                    File::delete(public_path($summery_url));
                    $path = $this->uploadFile($request, 'file/', 'summeries/');
                }
                $summery->update([
                    'name'=>($request->name) ? $request->name : $summery->name,
                    'url'=>($request->url) ?  $path : $summery->url,
                    'unit_id'=>($request->unit_id) ? $request->unit_id : $summery->unit_id
                ]);
                return $this->successresponse($summery, 'تم تعديل الملخص بنجاح', 200);
            }else{
                return $this->errorResponse('الملخص الذي تبحث عنه غير موجود', 404);
            }
        }catch(\Exception $e){
            return $this->errorResponse($e->getMessage(), 400);
        }

    }


    public function destroy($id)
    {
        try{
            $summery = Summery::find($id);
            if($summery){
                $url = $summery->url;
                $summery_url = parse_url($url);
                $summery_url = $summery_url['path'];
                File::delete(public_path($summery_url));
                $summery->delete();
                return $this->successResponse(null,'تم حذف الملخص بنجاح');
            }else {
                return $this->errorResponse('الملخص الذي تبحث عنه غير موجود',404);
            }
        }catch(\Exception $e){
            return $this->errorResponse($e->getMessage(),400);
        }
    }

    public function download($id)
    {
        $summery=Summery::find($id);
        $url = $summery->url;
        $summery_url = parse_url($url);
        $summery_url = $summery_url['path'];
        return response()->download(public_path($summery_url));  
    }

    public function get_unit_summery($unit_id)
    {
        $summery = Summery::where('unit_id', $unit_id)->get();
        return $this->successresponse(SummeryResource::collection($summery), 'نم عرض كل ملخصات وحدة', 200);
    }


    public function getAllSummariesWithFavoriteStatus($unit_id)
    {
        $user = JWTAuth::user();
        $user_id = $user->id;

        $summaries = Summery::where('unit_id', $unit_id)
            ->with(['favouriteUsers' => function ($query) use ($user_id) {
                $query->where('user_id', $user_id);
            }])
            ->get();
        return $this->successResponse(SummeryResource::collection($summaries), "تم عرض كل ملخصات الوحدة", 200);
    }
}
