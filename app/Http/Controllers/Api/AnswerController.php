<?php

namespace App\Http\Controllers\Api;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Resources\AnswerResource;
use Exception;

class AnswerController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $answers = Answer::all();
        return $this->successresponse(AnswerResource::collection($answers), 'answer  modul Successfully', 200);

        return $answers;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $questionId)
    {
        $question = Question::findOrFail($questionId);

        try {
            $answer = new Answer([
                'content' => $request->input('content'),
                'is_true' => $request->input('is_true'),
            ]);
            $question->answers()->save($answer);
            return $this->successResponse($answer, "create Question successfully", 201);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
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

    //     public function storeQuestionsAndAnswers(string $model_id, Request $request)
    // {
    //     foreach ($request->questions as $questionData) {
    //         $question = Question::create([
    //             'title' => $questionData['title'],
    //             'content' => $questionData['content'],
    //             'image' => $questionData['image'] ?? null,
    //             'modul_id' => $model_id,
    //         ]);
    //         // if($question)return true;

    //         foreach ($questionData['answers'] as $answerData) {
    //             $answer = new Answer([
    //                 'content' => $answerData['content'],
    //                 'is_true' => $answerData['is_true'],
    //             ]);

    //             if($question->answers()->save($answer))
    //             return true;
    //         }
    //     }

    //     return response()->json([
    //         'status' => true,
    //         'message' => 'Questions and answers stored successfully'
    //     ]);
    // }
    public function storeQuestionsAndAnswers(string $model_id, Request $request)
    {
        try {
            if ($request->has('questions') && is_array($request->questions)) {
                foreach ($request->questions as $questionData) {
                    $question = Question::create([
                        'title' => $questionData['title'] ?? '',
                        'content' => $questionData['content'] ?? '',
                        'image' => $questionData['image'] ?? null,
                        'modul_id' => $model_id,
                    ]);

                    foreach ($questionData['answers'] as $answerData) {
                        $answer = new Answer([
                            'content' => $answerData['content'] ?? '',
                            'is_true' => $answerData['is_true'],
                            // 'id'=>$question->id
                        ]);

                        $question->answers()->save($answer);
                        // $answer->save();
                    }
                }
                Log::info('Questions and answers stored successfully');
                return response()->json([
                    'status' => true,
                    'message' => 'Questions and answers stored successfully',
                ]);
            }
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'An error occurred while storing questions and answers',
            ]);
        }
    }
}
