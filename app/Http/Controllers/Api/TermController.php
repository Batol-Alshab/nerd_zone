<?php

namespace App\Http\Controllers\Api;

use App\Models\Term;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TermResource;
use Illuminate\Support\Facades\File;

class TermController extends Controller
{
    use ApiResponse;
    use FileUploader;
    public function index()
    {
        $term_url = Term::all();
        return $this->successresponse(TermResource::collection($term_url), 'تم عرض كل الدورات بنجاح', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedata=$request->validate([
                'name'=>'required|string',
                'url'=>'required|mimes:pdf|max:5000',
                'material_id'=>'required|exists:materials,id'
            ]);
            $path=$this->uploadFile($request,'file/','terms/');
            $term=Term::create([
                'name' => $request->name,
                'url' =>  $path,
                'material_id'=>$request->material_id
            ]);
            return $this->successResponse(new TermResource($term), 'تم إضافة دورة بنجاح', 201);
    
        }catch(\Exception $e){
            return $this->errorresponse($e->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $term = Term::find($id);
            if($term){
                return $this->successresponse(new TermResource($term), 'تم عرض الدورة بنجاح', 200);
            }else{
                return $this->errorResponse('الدورة الذي تبحث عنها غير موجودة', 404);
            }
        }catch(\Exception $e){
            return $this->errorresponse($e->getMessage(),400);
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $term = Term::find($id);
            if($term){
                $validatedata = $request->validate([
                    'name' => 'nullable|string',
                    'url' => 'nullable|mimes:pdf|max:10240',
                    'material_id' => 'nullable|exists:materials,id'
                ]);
                if($request->hasFile('url')){
                    $url=$term->url;
                    $term_url=parse_url($url);
                    $term_url=$term_url['path'];
                    File::delete(public_path($term_url));
                    $path = $this->uploadFile($request, 'file/', 'terms/');
                }
                $term->update([
                    'name'=>($request->name) ? $request->name : $term->name,
                    'url'=>($request->url) ?  $path : $term->url,
                    'material_id'=>($request->material_id) ? $request->material_id : $term->material_id
                ]);
                return $this->successresponse($term, 'تم تعديل الدورة بنجاح', 200);
            }else{
                return $this->errorResponse('الدورة الذي تبحث عنها غير موجودة', 404);
            }
        }catch(\Exception $e){
            return $this->errorResponse($e->getMessage(), 400);
        }   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $term=Term::find($id);
            if($term){
                $url = $term->url;
                $term_url = parse_url($url);
                $term_url = $term_url['path'];
                File::delete(public_path($term_url));
                $term->delete();
                return $this->successResponse(null, 'تم حذف الدورة بنجاح');
            }else{
                return $this->errorResponse('الدورة الذي تبحث عنها غير موجودة',404);
            }
        }catch(\Exception $e){
            return $this->errorresponse($e->getMessage(),400);
        }
    }

    public function download($id)
    {
        $term=Term::find($id);
        $url = $term->url;
        $term_url = parse_url($url);
        $term_url = $term_url['path'];
        return response()->download(public_path($term_url));  
    }


    public function get_material_terms($material_id)
    {
        $term = Term::where('material_id', $material_id)->get();
        return $this->successresponse(TermResource::collection($term), 'تم غرض كل دورات مادة', 200);

    }
}
