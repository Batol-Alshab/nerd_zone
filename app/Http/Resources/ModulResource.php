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
        // $user = JWTAuth::user();

        // $moduls=Modul::with(['modulUsers' => function($query) use ($user){
        //     $query->where('user_id', $user);
        // }]) 
        //        ->get();
       return [
            'id'=>$this->id,
            'name'=>$this->name,
            'is_open'=>$this->is_open,
            'rate'=>$this->rate,
            'percent' => ModulUserResource::collection($this->whenLoaded('modulUsers')),
            // 'modulUsers'=>$this->unit
            // 'modulUsers'=> ModulUserResource::collection($this->whenLoaded('modulUsers')),

            // 'percent' => $this->modulUsers
            // ->percent
       ];
    }
}
