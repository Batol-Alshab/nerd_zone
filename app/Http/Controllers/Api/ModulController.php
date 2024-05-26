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
        $moduls=Modul::all();
        return $this->successresponse(ModulResource::collection($moduls),'Moduls index success ',200);
        // return $moduls;
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

    
    //open
    public function getAllOpenModulsWithSolved($unit_id){
        $user=JWTAuth::user();
       $user_id=$user->id;
       $moduls=Modul::where('is_open',1)
       ->with('modulUsers')
       ->get();
        return $this->successResponse(ModulResource::collection($moduls),'success replay',200);
    }
    //locked
    public function getAllLockedModulsWithSolved($unit_id){     
       $user=JWTAuth::user();
       $user_id=$user->id;
       $moduls=Modul::where('is_open',0)
       ->with('modulUsers')
       ->get();
        return $this->successResponse(ModulResource::collection($moduls),'success replay',200);
    }


    // public function getAllModulsWithSolved($unit_id){
    //     $user=JWTAuth::user();
    //     $user_id=$user->id;
    //     $moduls=Modul::where('unit_id',$unit_id)
    //     ->get();
    //      return $this->successResponse(ModulResource::collection($moduls),'success replay',200); 
    // }
    
}
