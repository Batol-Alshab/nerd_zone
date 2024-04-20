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
        return $this->successResponse(UnitResource::collection($units),'Unit  index Successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        try{
            $validateData=$request->validate([
                'name'=>'required|string|unique:units,name',
                'image'=>'required|mimes:png,jpg,jpeg,gif|max:5240',
                'material_id'=>'required|exists:materials,id'
        ]);
       
        $path= $this->uploadAll($request,'images/','unit_image/');
        $unit=Unit::create([
            'name'=>$request->name,
            'image'=>$request->image,
            'material_id'=>$request->material_id
        ]);
        return $this->successResponse(new UnitResource($unit),'Unit store Successfully!',201);
        }catch(\Exception $e){
            return $this->errorResponse('the Unit is store already', 500);
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
                return $this->successresponse(new unitResource($unit), 'Unit show successfully', 200);
            }
            else
            {
                return $this->errorResponse('the Unit is not found ', 404);
            }
        }catch (\Exception $e) {
            return $this->errorResponse('Failed to show Unit', 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $unit=Unit::find($id);
            if($request->image)
            {
                $path=$this->uploadAll($request,'images/','unit_image');
            }
            if($unit)
            {
                $unit->update([
                    'name'=>($request->name) ? $request->name :$unit->name ,
                    'image'=>($request->image) ?$request->image :$unit->image,
                    'material_id'=>($request->material_id) ? $request->material_id :$unit->material_id            
                ]);
                return $this->successresponse(new unitResource($unit), 'Unit Update successfully', 200);
            }
            else
            {
                return $this->errorResponse('the Unit is not found ', 404);
            }
        }catch (\Exception $e) {
            return $this->errorResponse('Failed to update Unit', 500);
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
                return $this->successResponse(null,'Unit has been deleted successfully.');
            }
            else
            {
                return $this->errorResponse('the unit not found ',404);
            }
        }catch(\Exception $e){
            return $this->errorResponse('Failed to destroy Unit',500);

        }
    }

    public function get_material_unites($material_id)
    {
        $units=Unit::where('material_id',$material_id)->get();
        return $this->successResponse(UnitResource::collection($units),'successfully',200);
    }
}
