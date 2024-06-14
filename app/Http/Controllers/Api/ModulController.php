<?php

namespace App\Http\Controllers\Api;

use App\Models\Modul;
use App\Models\Summery;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModulResource;
use App\Http\Resources\SummeryResource;

class ModulController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moduls = Modul::all();
        return $this->successresponse(ModulResource::collection($moduls), 'Moduls index success ', 200);
        // return $moduls;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $moduls= Modul::create([
            'name'=>$request->name,
            'is_open'=>$request->is_open,
            'rate'=>$request->rate,
            'unit_id'=>$request->unit_id
        ]);
        return $this->successResponse($moduls,"created succesfully",200);
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



    public function getModelForUnit($is_open, $unit_id)
{
    $user = JWTAuth::user();

    if (!$user) {
        return $this->unauthorized();
    }

    $user_id = $user->id;

    $moduls = Modul::where('is_open', $is_open)
                    ->where('unit_id', $unit_id)
                    ->with('modulUsers')
                    ->get();
//  return $moduls;
    return $this->successResponse(ModulResource::collection($moduls), 'Success response', 200);
}

}
