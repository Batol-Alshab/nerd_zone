<?php

namespace App\Http\Resources;

use App\Models\Modul;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Resources\ModulUserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ModulResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    // $user
    public function toArray(Request $request): array
    {

       return [
            'id'=>$this->id,
            'name'=>$this->name,
            'is_open'=>$this->is_open,
            'rate'=>$this->rate,
            'pivot' => ModulUserResource::collection($this->whenLoaded('modulUsers')),
            // 'percent' => $this->userModuls->pivot->percent ?? 0,
       ];

    }
}

