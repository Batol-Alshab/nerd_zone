<?php

namespace App\Http\Controllers\Api;

use App\Models\Unit;
use App\Models\OpenQuestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpenQuestionController extends Controller
{  use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->successResponse(OpenQuestion::all(),"Questions Returned Successfully",200);
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
    public function getModelsForUnit($unit_id)
    {   $Question=new OpenQuestion();
        $models=$Question->get_models($unit_id);
        return $this->successResponse($models,"Models Returned Successfully",200);
    }
}
