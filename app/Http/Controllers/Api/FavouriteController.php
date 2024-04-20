<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Summery;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    use ApiResponse;
    // Attaching a summary to a user
    public function AddToFavourite(Request $request)
    {
        $user = JWTAuth::user();
        $summery = Summery::find($request->summeryId);
        if ($user->summeries->contains($summery)) {
            return $this->errorResponse('the summery  already has been added to your favourite', 400);
        } else {

            $user->summeries()->attach($summery);
            return $this->successResponse(null, "Adding successfully to your favourite", 200);
        }
    }

    public function RemoveFromFavourite(Request $request)
    {  $user = JWTAuth::user();
        $summery = Summery::find($request->summeryId);
        if ($user->summeries->contains($summery)) {
            $user->summeries()->detach($summery);
            return $this->successResponse(null, "Removing successfully from your favourite", 200);

        } else {
           return $this->notFound();
        }
    }



    // Detaching a summary from a user
    // $user->summaries()->detach($summaryId);

}
