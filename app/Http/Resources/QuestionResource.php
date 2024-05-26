<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\AnswerResource;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title'=>$this->title,
            'content'=>$this->content,
            'id'=>$this->id,
            'image'=>$this->image,
            'answers'=> AnswerResource::collection($this->whenLoaded('answers')),
        ];
    }
}
