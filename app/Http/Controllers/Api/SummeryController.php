<?php

namespace App\Http\Controllers\Api;

use App\Models\Unit;
use App\Models\User;
use App\Models\Summery;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\SummeryResource;

class SummeryController extends Controller
{
    use ApiResponse;
    use FileUploader;
    public function index()
    {
        $summeries = Summery::all();
        return $this->successresponse(SummeryResource::collection($summeries), 'Summery  index Successfully', 200);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'url' => 'required|mimes:pdf,doc,docx,txt|max:10240',
            'unit_id' => 'required|exists:unites,id'
        ]);
        $path = $this->uploadFile($request, 'file/', 'summeries/');
        $summery = Summery::create([
            'name' => $request->name,
            'url' => $request->url,
            'unit_id' => $request->unit_id
        ]);
        return $this->successResponse(new SummeryResource($summery), 'Summery  store Successfully', 201);
    }


    public function show(string $id)
    {
        $summery_url = Summery::find($id);
        return $this->successresponse(SummeryResource::collection($summery_url), 'Summery  Showed Successfully', 200);

        // return $this->successResponse($summery_url, 'show  Summery Successfully');
    }


    public function update(Request $request, string $id)
    {
        $summery_url = Summery::find($id);
        $validatedData = $request->validate([
            'name' => 'required|string',
            'url' => 'required|mimes:pdf,doc,docx,txt|max:10240',
            'unit_id' => 'required|exists:unites,id'
        ]);
        $summery_url->update($validatedData);
        return $this->successresponse(SummeryResource::collection($summery_url), 'Summery  Showed Successfully', 200);
        // return $this->successResponse($summery_url, 'Summery has been updated successfully.');

    }


    public function destroy($id)
    {
        $summery_url = Summery::find($id);
        $summery_url->delete();
        return $this->successResponse(null, 'Summery has been deleted successfully.');
    }
    public function get_unit_summery($unit_id)
    {
        $summery = Summery::where('unit_id', $unit_id)->get();
        return $this->successresponse(SummeryResource::collection($summery), 'Summery Showed Successfully', 200);
    }


    public function getAllSummariesWithFavoriteStatus($unit_id)
    {
        $user = JWTAuth::user();
        $user_id = $user->id;

        $summaries = Summery::where('unit_id', $unit_id)
            ->with(['favouriteUsers' => function ($query) use ($user_id) {
                $query->where('user_id', $user_id);
            }])
            ->get();
        return $this->successResponse(SummeryResource::collection($summaries), "success replay", 200);
    }
}
