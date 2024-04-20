<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image','material_id'];

    public function summeries()
    {
        return $this->hasMany(Summery::class);
    }
    public function locked_questions()
    {
        return $this->hasMany(locked_question::class);
    }
    public function openquestions()
    {
        return $this->hasMany(OpenQuestion::class);
    }
}
