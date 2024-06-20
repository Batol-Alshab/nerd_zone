<?php

namespace App\Http\Controllers\Api;

use App\Models\Question;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
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

        try{
            // $validatedData = $request->validate([
            //     'title' => 'required|string',
            //     'content'=>'longtext',
            //     'modul_id'=>'exists:modul,id'
            // ]);

            $model=Question::create([
                'title'=>$request->title,
                'content'=>$request->content,
                'image'=>$request->image ?? null ,
                'modul_id'=>$request->modul_id
            ]);
            return $this->successResponse($model, "create Question successfully", 201);
        }catch (\Exception $e) {
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
    public function getQuestionFormodul ($modul_id){

        if (!JWTAuth::user()) {
            return $this->errorResponse('قم بتسجيل الدخول للحصول على النموذج', 401);
            // return $this->unauthorized();
        }
        $questions=new Question();
        $questions=$questions->get_questions($modul_id);
        return $this->successresponse(QuestionResource::collection($questions), 'تم عرض النموذج بنجاح', 200);
    }
}
