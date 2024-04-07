<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OpenQuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'content'=>$this->content,
            'id'=>$this->id,
            'rate'=>$this->rate,
            'answers'=> AnswerResource::collection($this->whenLoaded('answers')),
        ];
    }
}
