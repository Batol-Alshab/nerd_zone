<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SectionResource;
use Illuminate\Validation\Validator;

class SectionController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::all();
        return $this->successResponse(SectionResource::collection($sections), 'section index  successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'name' => 'required|string|unique:sections,name',
            ]);
            
            $section = Section::create([
                "name" => $request->name,
            ]);
            return $this->successResponse(new SectionResource($section), "create section successfully", 201);
        }catch (\Exception $e) {
            return $this->errorResponse('the section is store already', 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $section = Section::find($id);
            if($section)
            {
                return $this->successResponse(new SectionResource($section), 'section  Showed Successfully',200);
            }
            else
            {
                return $this->errorResponse('Section not found ',404);
            }
        }catch (\Exception $e) {
            return $this->errorResponse('Failed to show Section', 500);
        }
    }
        
    /**
     * Update the specified resource in storage.
    */
    public function update(Request $request, string $id)
    {
        try{
            $section = Section::find($id);
            if($section)
            {
                $validatedData = $request->validate([
                    'name' => 'required|string|unique:sections,name',
                ]);  
                $section->update($validatedData);
                return $this->successResponse(new SectionResource($section), 'Section has been updated successfully.');
            }
            else
            {
                return $this->errorResponse('the section is not found ', 404);
            }
        }
        catch (\Exception $e) {
            return $this->errorResponse('the section is found alreay', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $section = Section::find($id);
            if ($section) 
            {
                $section->delete();
                return $this->successResponse(null, 'Section has been destroyed successfully.', 200);
            } 
            else 
            {
                return $this->errorResponse('Section not found.', 404);
            }
        } catch (\Exception $e) {
            return $this->errorResponse('Failed to destroy the Section.', 500);
        }
    }

}
