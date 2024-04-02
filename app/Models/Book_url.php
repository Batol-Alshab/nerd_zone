<?php

namespace App\Models;

use App\Models\Material;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book_url extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'url', 'material_id'];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
