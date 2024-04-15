<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenQuestion extends Model
{
    use HasFactory;
    protected $fillable = ['title','content', 'rate', 'model'];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class);
    }
    public function get_models($unit_id)
    {

        return $this->where('unit_id', $unit_id)->select('model')->distinct()->get();
    }
}
