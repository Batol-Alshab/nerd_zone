<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
            'title1' => $this->title1,
            'content1' => $this->content1,
            'title2' => $this->title2,
            'content2' => $this->content2,
            'title3' => $this->title3,
            'content3' => $this->content3,
            'image' => $this->imge
        ];
    }
}
