<?php

namespace App\Http\Controllers\Api;

use App\Models\Term;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TermResource;

class TermController extends Controller
{
    use ApiResponse;
    use FileUploader;
    public function index()
    {
        $term_url = Term::all();
        return $this->successresponse(TermResource::collection($term_url), 'Term  Showed Successfully', 200);
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
        $term_url = Term::find($id);
        return $this->successresponse(TermResource::collection($term_url), 'success reply', 200);
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
        $term_url=Term::find($id);
        $term_url->delete();
        return $this->successResponse(null, 'Term has been deleted successfully.');
    }
    public function get_material_terms($material_id)
    {
        $term = Term::where('material_id', $material_id)->get();
        return $this->successresponse(TermResource::collection($term), 'success reply', 200);

    }
}
