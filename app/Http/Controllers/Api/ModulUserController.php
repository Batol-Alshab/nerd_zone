<?php

namespace App\Http\Controllers\Api;

use App\Models\ModulUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModulUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = Auth::user();
        // $fav=Favourite::find($user->id);
        // $id = $user->favouriteSummeries->id;
        // $summery=Summery::find($id);
        // $unit=Unit::find($summery->unit_id);
        // $material=$unit->material_id;

        // return $id;
        // return $this->successresponse(FavouritResource::collection($favorites), '  index Successfully', 200);
    
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
}
