<?php

namespace App\Http\Resources;

use App\Models\Favourite;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Resources\Json\JsonResource;

class SummeryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public function toArray(Request $request): array
    {
        // $isFavorite = $this->additional['is_favorite'] ?? false;
         $user = JWTAuth::user();
        return [
            'id' => $this->id,
            'name' => $this->name,
            'url' => $this->url,
            'is_favorite' => $this->favouriteUsers->contains($user)




        ];
    }
}
