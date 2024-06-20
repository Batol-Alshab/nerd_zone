<?php

namespace App\Http\Controllers\Api;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UnitResource;

class UnitController extends Controller
{  
    use ApiResponse;
    use FileUploader;
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $units=Unit::all();
        return $this->successResponse(UnitResource::collection($units),'تم عرض كل الوحدات بنجاح', 200);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        try{
            $validateData=$request->validate([
                'name'=>'required|string|unique:units,name',
                'image'=>'required|mimes:png,jpg,jpeg,gif|max:2000',
                'material_id'=>'required|exists:materials,id'
        ]);
        $path= $this->uploadAll($request,'images/','unit_image/');
        $unit=Unit::create([
            'name'=>$request->name,
            'image'=> $path,
            'material_id'=>$request->material_id
        ]);
        return $this->successResponse(new UnitResource($unit),'تم إضافة الوحدة بنجاح',201);
        }catch(\Exception $e){
            return $this->errorResponse($e->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $unit=Unit::find($id);
            if($unit)
            {
                return $this->successresponse(new unitResource($unit), 'تم عرض الوحدة بنجاح', 200);
            }
            else
            {
                return $this->errorResponse('الوحدة التي تبحث عنها غير موجودة', 404);
            }
        }catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $unit=Unit::find($id);
            if($unit)
            {
                $validatedata=$request->validate([
                    'name'=>'nullable|string|unique:units,name',
                    'image'=>'nullable|mimes:png,jpg,jpeg,gif|max:2000',
                    'material_id'=>'nullable|exists:materials,id'
                ]);
                $path=$this->uploadAll($request,'images/','unit_image');
                $unit->update([
                    'name'=>($request->name) ? $request->name :$unit->name ,
                    'image'=>($request->image) ? $path :$unit->image,
                    'material_id'=>($request->material_id) ? $request->material_id :$unit->material_id            
                ]);
                return $this->successresponse(new unitResource($unit), 'تم تعديل الوحدة بنجاح', 200);
            }
            else
            {
                return $this->errorResponse('الوحدة التي تبحث عنها غير موجودة', 404);
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
            $unit=Unit::find($id);
            if($unit)
            {
                $unit->delete();
                return $this->successResponse(null,'تم حذف الوحدة بنجاح');
            }
            else
            {
                return $this->errorResponse('الوحدة التي تبحث عنها غير موجودة',404);
            }
        }catch(\Exception $e){
            return $this->errorResponse($e->getMessage(),400);

        }
    }

    public function get_material_unites($material_id)
    {
        $units=Unit::where('material_id',$material_id)->get();
        return $this->successResponse(UnitResource::collection($units),'تم عرض كل وحدات المادة',200);
    }
}
