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
        return $this->successResponse(MaterialResource::collection($materials), 'Material index  successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedata=$request->validate([
                'name'=>'required|string|unique:materials,name',
                'image'=>'mimes:jpg,png,jpeg,gif',
                'section_id'=>'required|exists:sections,id'
            ]);
            if($request->hasFile('image')) {
                $path = $this->uploadAll($request, 'images/', 'material_image/');
                $material=Material::create([
                    'name'=>$request->name,
                    'image'=>$request->image,
                    'section_id'=>$request->section_id
                ]);
            } 
            else
            {
                $material=Material::create([
                    'name'=>$request->name,
                    'image'=>'http://127.0.0.1:8000/images/material_image/BOOK.png',
                    'section_id'=>$request->section_id
                ]);
            }
                return $this->successResponse(new MaterialResource($material),'Material store Successfully!',201);
            
        }catch (\Exception $e) {
            return $this->errorResponse('the material is store already', 500);
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
            return $this->successResponse(new MaterialResource($material),'Material show  successfully', 200);
            }
            else
            {
                return $this->errorResponse('the Material is not found ', 404);
            }
        }catch (\Exception $e) {
            return $this->errorResponse('Failed to show Materail', 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $material=Material::find($id);
        if($request->image);
            {
                $path=$this->uploadAll($request,'images/','material_image/');
            }
        $material->update([
            'name'=>($request->name) ? $request->name :$material->name ,
            'image'=>($request->image) ?$request->image :$material->image,
            'section_id'=>($request->section_id) ? $request->section_id :$material->section_id
        ]);
        return $this->successResponse(new MaterialResource($material), 'Material updated Successfully!', 200);
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
                return $this->successResponse(null,'Materail has been destroyed successfully',200);
            }
            else 
            {
                return $this->errorResponse('Material not found',404);
            }
        }catch(\Exception $e){
                return $this->errorResponse('Failed to destroy the Materail.', 500);
        }
            

    }

    public function sientific_material()
    {
        $materials = Material::where('section_id', '1')->get();

        return $this->successResponse(MaterialResource::collection($materials), "sientific Subjects");
    }
    public function literary_material()
    {
        $materials = Material::where('section_id', '2')->get();

        return $this->successResponse(MaterialResource::collection($materials), "literary Subjects");
    }
}
