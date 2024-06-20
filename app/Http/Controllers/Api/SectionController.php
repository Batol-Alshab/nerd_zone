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
        return $this->successResponse(SectionResource::collection($sections), 'تم عرض كل الأفرع بنجاح', 200);
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
            return $this->successResponse(new SectionResource($section), "تم إضافة الفرع بنجاح", 201);
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
            $section = Section::find($id);
            if($section)
            {
                return $this->successResponse(new SectionResource($section), 'تم عرض الفرع بنجاح',200);
            }
            else
            {
                return $this->errorResponse('لم يتم ايجاد الفرع الذي تبحث عنه',404);
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
            $section = Section::find($id);
            if($section)
            {
                $validatedData = $request->validate([
                    'name' => 'required|string|unique:sections,name',
                ]);  
                $section->update($validatedData);
                return $this->successResponse(new SectionResource($section), 'تم تعديل الفرع بنجاح',200);
            }
            else
            {
                return $this->errorResponse('المادة التي تبحث عنه غير موجود',404);
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
        try {
            $section = Section::find($id);
            if ($section) 
            {
                $section->delete();
                return $this->successResponse(null, 'تم حذف الفرع بنجاح', 200);
            } 
            else 
            {
                return $this->errorResponse('الفرع التي تبحث عنه غير موجود', 404);
            }
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 400);
        }
    }

}
