<?php

namespace App\Models;

use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TradeOff extends Model
{
    use HasFactory;
    protected $fillable=['name', 'url'];
    
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
