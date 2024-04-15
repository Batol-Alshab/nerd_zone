<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'url', 'material_id'];
    
    public function material()
    {
        return $this->belongsTo(Material::class);
    }

}
