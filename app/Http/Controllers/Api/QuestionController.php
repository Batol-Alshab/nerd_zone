<?php

namespace App\Http\Controllers\Api;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;

class QuestionController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $questions=Question::all();
        $questions = Question::with(['answers'])->get(); 
        return $this->successresponse(QuestionResource::collection($questions), 'question  index Successfully', 200);
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
    public function getQuestionFormodul ($modul_id){
        $questions=new Question();
        $questions=$questions->get_questions($modul_id);
        return $this->successresponse(QuestionResource::collection($questions), 'question  modul Successfully', 200);
    }
}
