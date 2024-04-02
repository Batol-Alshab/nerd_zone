<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locked_question extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'url', 'rate', 'unit_id'];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}