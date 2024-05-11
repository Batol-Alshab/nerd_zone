<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FavouritResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {  //  $summeryMaterials = $this->summery->unit_id;
    //     $Names = $summeryMaterials->pluck('name')->toArray();

        return [
            'summery' => new SummeryResource($this->whenLoaded('favouriteSummeries')),
            // 'unit name'=>$Names
            // 'unit' => $this->unit->name//->unit_id->material_id
        ];
    }
}
