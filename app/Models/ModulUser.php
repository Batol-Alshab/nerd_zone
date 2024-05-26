<?php

namespace App\Models;

use App\Models\User;
use App\Models\Modul;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModulUser extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'modul_id', 'percent'];
    // public function users()
    // {
    //     // return $this->belongsToMany(User::class,'modul_users','user_id','modul_id','percent');
 
    //     return $this->belongsToMany(User::class,'modul_users','user_id','modul_id')->withPivot('percent');;

    // }
    // public function moduls()
    // {
    //     return $this->belongsToMany(Modul::class,'modul_users','user_id','modul_id')->withPivot('percent');;
    // }
}
