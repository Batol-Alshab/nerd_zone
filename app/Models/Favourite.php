<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;



class Favourite extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'summery_id'];
    public function users()
    {
        return $this->belongsToMany(User::class,'favourites');
    }
    public function summeries()
    {
        return $this->belongsToMany(Summery::class,'favourites');
    }
}
