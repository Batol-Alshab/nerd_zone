<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    

    public function open_question()
    {
        return $this->belongsTo(OpenQuestion::class, 'open_question_id');
    }
}
