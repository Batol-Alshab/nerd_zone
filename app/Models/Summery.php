<?php

namespace App\Models;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Summery extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'url', 'unit_id'];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
