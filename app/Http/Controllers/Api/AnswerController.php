<?php

namespace App\Http\Controllers\Api;

use App\Models\Answer;
use App\Models\OpenQuestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AnswerResource;
use App\Http\Resources\OpenQuestionResource;

class AnswerController extends Controller
{use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function getQuestionsWithAnswers($unit_id, $model)
    {
        $open_questions = OpenQuestion::where('unit_id', $unit_id)
            ->where('model', $model)
            ->distinct()
            ->with('answers') 
            ->get();
        return $this->successResponse(OpenQuestionResource::collection($open_questions), 'Questions Returned Successfully');

    }



}
