<?php

namespace App\Models;

use App\Models\User;
use App\Models\Material;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
