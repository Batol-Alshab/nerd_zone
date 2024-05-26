<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\User;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Modul extends Model
{
    use HasFactory;
    protected $fillable = ['name','is_open', 'rate', 'unit_id'];
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function qestions(){
        return $this->hasMany(Question::class);
    }
    public function  get_moduls($unit_id){
        return $this->where('unit_id',$unit_id)->get();
    }

    public function modulUsers()
    {
        return $this->belongsToMany(User::class,'modul_users')->withPivot('percent');
        
    }

}
