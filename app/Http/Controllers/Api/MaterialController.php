<?php

namespace App\Http\Controllers\Api;

use App\Models\Material;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MaterialResource;

class MaterialController extends Controller
{
    use apiResponse;
    use FileUploader;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::all();
        return $this->successResponse(MaterialResource::collection($materials), 'تم عرض كل المواد بنجاح', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        try{  
            $validatedata=$request->validate([
                'name'=>'required|string|unique:materials,name',
                'image'=>'nullable|mimes:jpg,png,jpeg,gif|max:2000',
                'section_id'=>'required|exists:sections,id'
            ]);
                
                $path = $this->uploadAll($request, 'images/', 'material_image/');
                $material=Material::create([
                    'name'=>$request->name,
                    'image'=>($request->image) ?  $path :'http://127.0.0.1:8000/images/material_image/BOOK.png',
                    'section_id'=>$request->section_id
                ]);
                return $this->successResponse(new MaterialResource($material),'تم إضافة مادة بنجاح',201);
            
        }catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $material=Material::find($id);
            if($material)
            {
            return $this->successResponse(new MaterialResource($material),'تم عرض المادة بنجاح', 200);
            }
            else
            {
                return $this->errorResponse('المادة التي تبحث عنها غير موجودة', 404);
            }
        }catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, $id)
    {
        try{  
            $material=Material::find($id);
            if($material)
            {
                $validatedata=$request->validate([
                    'name'=>'nullable|unique:materials,name',
                    'image'=>'nullable|mimes::jpg,png,jpeg,gif|max:2000',
                    'section_id'=>'nullable|exists:sections,id'
                ]);
                $path = $this->uploadAll($request, 'images/', 'material_image/');
                $material->update([
                    'name'=>($request->name) ? $request->name :$material->name ,
                    'image'=>($request->image) ? $path :$material->image,
                    'section_id'=>($request->section_id) ? $request->section_id :$material->section_id
                ]);
                return $this->successResponse(new MaterialResource($material), 'تم تعديل المادة بنجاح', 200);
        
            }else{
                return $this->errorResponse('المادة التي تبحث عنها غير موجودة',404);
            }      
        }catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $material=Material::find($id);
            if($material)
            {
                $material->delete();
                return $this->successResponse(null,'تم حذف المادة بنجاح',200);
            }
            else 
            {
                return $this->errorResponse('المادة التي تبحث عنها غير موجودة',404);
            }
        }catch(\Exception $e){
                return $this->errorResponse($e->getMessage(), 400);
        }
            

    }

    public function sientific_material()
    {
        $materials = Material::where('section_id', '1')->get();

        return $this->successResponse(MaterialResource::collection($materials), "تم عرض مواد الفرع العلمي بنجاح");
    }
    public function literary_material()
    {
        $materials = Material::where('section_id', '2')->get();

        return $this->successResponse(MaterialResource::collection($materials), "تم عرض مواد الفرع الأدبي بنجاح");
    }
}
