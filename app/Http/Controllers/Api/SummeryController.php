<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Summery;
use App\Models\Unit;
use Illuminate\Http\Request;

class SummeryController extends Controller
{

    public function index()
    {
        $summery_url = Summery::all();
        return $this->successResponse($summery_url, 'Summery  Showed Successfully');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'url' => 'required|mimes:pdf,doc,docx,txt|max:10240',
            'unit_id' => 'required|exists:unites,id'
        ]);
        // $uploadedFile = $request->file('book_url');
        // $filePath = $uploadedFile->store('books', 'public');
        // $path = $this->uploadFile($request, 'url', 'summery');
        // $summery = Unit::create([
        $path = $this->uploadFile($request, 'url', 'summeries');
        $summery = Summery::create([
            'title' => $request->title,
            'url' => $path,
            'unit_id' => $request->unit_id
        ]);


        return $this->successResponse($summery, 'Summery  store Successfully', 201);
    }


    public function show(string $id)
    {
        $summery_url = Summery::find($id);
        return $this->successResponse($summery_url, 'show  Summery Successfully');
    }


    public function update(Request $request, string $id)
    {
        $summery_url = Summery::find($id);
        $validatedData = $request->validate([
            'title' => 'required|string',
            'url' => 'required|mimes:pdf,doc,docx,txt|max:10240',
            'unit_id' => 'required|exists:unites,id'
        ]);
        $summery_url->update($validatedData);
        return $this->successResponse($summery_url, 'Summery has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $summery_url = Summery::find($id);
        $summery_url->delete();
        return $this->successResponse(null, 'Summery has been deleted successfully.');
    }
    public function get_unit_summery($material_id,$unit_id)
    {
        $summery = Summery::where('unit_id', $unit_id,'material_id',$material_id)->get();
        return $this->successResponse($summery, 'success reply', 200);
    }
}
