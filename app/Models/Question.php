<?php

namespace App\Models;

use App\Models\Modul;
use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $fillable=['title', 'content' ,'modul_id'];

    public function modul(){
        return $this->belongsTo(Modul::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class);
    }
    public function  get_questions($modul_id){
        return $this::with(['answers']) ->where('modul_id',$modul_id)->get();
    }
}
