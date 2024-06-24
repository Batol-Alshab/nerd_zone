<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Modul;
use App\Models\Section;
use App\Models\Summery;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable  implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'lname',
        'password',
        'email',
        'phone_number',
        'sex',
        'image',
        'level',
        'opinion',
        'section_id',
        'rate'




    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    // ...

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function favouriteSummeries()
    {
        return $this->belongsToMany(Summery::class, 'favourites', 'user_id', 'summery_id');
    }

    public function userModuls()
    {
        return $this->belongsToMany(Modul::class,'modul_users')->withPivot('percent');//,'user_id','modul_id')->withPivot('percent');;
    }
}
