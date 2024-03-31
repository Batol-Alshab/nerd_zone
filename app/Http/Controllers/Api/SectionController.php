<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SectionResource;


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
        $validatedData = $request->validate([
            'name' => 'required|string|uniqe',
        ]);
        $section = Section::create([
            "name" => $request->name,
        ]);

        return $this->successResponse($section, "create section successfully", 200);
    }


    // public function show(string $id)
    // {
    //     $section = Section::find($id);
    //     return $this->successResponse($section, 'section  Showed Successfully');
    // }
    public function show(Section $section)
    {
        // $section = Section::find($id);
        return $this->successResponse($section, 'section  Showed Successfully');
    }



    public function update(Request $request, string $id)
    {
        $section = Section::find($id);
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);
        $section->update($validatedData);
        return $this->successResponse($section, 'Section has been updated successfully.');
    }


    public function destroy(string $id)
    {
        try {
            $section = Section::find($id);

            if ($section) {
                $section->delete();
                return $this->successResponse(null, 'Section has been destroyed successfully.', 204);
            } else {
                return $this->errorResponse('Section not found.', 404);
            }
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return $this->errorResponse('Failed to destroy the section.', 500);
        }
    }

    // public function get_section_scientific_material($id)
    // {
    //     // $section = new Section();
    //     $section = Section::find($id);
    //     if (!$section) {
    //         return $this->errorResponse('Section not found', 404);
    //     }
    //     // $materials = $section->materials();
    //     return $this->successResponse($section, 'مواد الفرع العلمي', 204);
    // }
    // public function get_section_literary_material()
    // {
    //     $section = new Section();
    //     $materials = $section->materials()->where('id', '2')->get();
    //     return $this->successResponse($materials, 'مواد الفرع الادبي', 204);
    // }
}
