<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Summery;
use App\Models\Favourite;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Http\Resources\FavouritResource;
use App\Models\Unit;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $user = Auth::user();
        $fav=Favourite::find($user->id);
        $id = $user->favouriteSummeries->id;
        $summery=Summery::find($id);
        $unit=Unit::find($summery->unit_id);
        $material=$unit->material_id;

        return $id;
        // return $this->successresponse(FavouritResource::collection($favorites), '  index Successfully', 200);
    }




    public function AddOrRemoveFavourite($summaryId)
    {
        $user = JWTAuth::user();
        $summery = Summery::find($summaryId);
        if ($user->favouriteSummeries->contains($summery)) {
            $user->favouriteSummeries()->detach($summery);

            return $this->successResponse(null,'the summery  removed from your favourite', 200);
        } else {

            $user->favouriteSummeries()->attach($summery);
            return $this->successResponse(null, "Adding successfully to your favourite", 200);
        }
    }


}
