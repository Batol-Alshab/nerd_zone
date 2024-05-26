<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\ModulUser;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;

class ModulUserController extends Controller
{ use ApiResponse;
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
    public function updateRate(Request $request)
    {
        $user = JWTAuth::user();
        $user = User::find($user->id);
        $modulId = $request->module_id;  // Example modul ID
        $newPercent = $request->percent;  // New percent value
        if ($user->userModuls()->wherePivot('modul_id', $modulId)->exists()) {
            return $this->errorResponse('Record already exists for the given modul', 400);
        }
        $user->userModuls()->syncWithoutDetaching($modulId, ['percent' => $newPercent]);
        return $this->successResponse(null,"success",200);
    }
}
