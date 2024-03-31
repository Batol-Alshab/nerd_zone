<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = ['title ', 'material_id'];

    public function summeries()
    {
        return $this->hasMany(Summery::class);
    }
}
