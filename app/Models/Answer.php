<?php

namespace App\Models;

use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'is_true', 'question_id'];
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
