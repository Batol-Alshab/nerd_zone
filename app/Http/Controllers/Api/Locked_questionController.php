<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Locked_question;
use App\Http\Controllers\Controller;
use App\Http\Resources\LockedQuestionResource;

class Locked_questionController extends Controller
{use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Locked_question_url = Locked_question::all();
        return $this->successresponse(LockedQuestionResource::collection($Locked_question_url), 'Locked  Showed Successfully', 200);
        // return $this->successResponse($Locked_question_url, 'Locked Question  Showed Successfully');
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
        $Locked_question_url = Locked_question::find($id);
        return $this->successresponse(LockedQuestionResource::collection($Locked_question_url), 'Locked  Showed Successfully', 200);
        // return $this->successResponse($Locked_question_url, 'show  Locked Question Successfully');
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
        $Locked_question_url = Locked_question::find($id);
        $Locked_question_url->delete();
        return $this->successResponse(null, 'Locked Question has been deleted successfully.');
    }

    // public function get_unit_locked_question($material_id,$unit_id)
    public function get_unit_locked_question($unit_id)
    {
        // $locked_question = Locked_question::where('unit_id', $unit_id,'material_id',$material_id)->get();
        $locked_question = Locked_question::where('unit_id', $unit_id)->get();
        return $this->successresponse(LockedQuestionResource::collection($locked_question), 'Locked  Showed Successfully', 200);
        // return $this->successResponse($locked_question, 'success reply', 200);
    }
}
