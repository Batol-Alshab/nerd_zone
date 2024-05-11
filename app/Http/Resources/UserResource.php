<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Tymon\JWTAuth\Facades\JWTAuth;


class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     *
     */


    public function toArray(Request $request)
    {
        return [

                'fname' => $this->fname,
                'lname' => $this->lname,
                // 'email' => $this->email,
                // 'phone_number' => $this->phone_number,
                'sex' => $this->sex,
                'section_id' => $this->section_id,
                'rate'=>$this->rate,
                'image'=>$this->image,
                // 'level'=>$this->level,
                'opinion'=>$this->opinion,
                'summeries' => SummeryResource::collection($this->whenLoaded('favouritesummeries')),

        ];
    }
}
