<?php

namespace App\Http\Controllers\Api;

use App\Models\Material;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MaterialResource;

class MaterialController extends Controller
{
    use apiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::all();
        return $this->successresponse(MaterialResource::collection($materials), 'success', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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
