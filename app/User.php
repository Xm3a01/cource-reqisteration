<?php

namespace App;

use App\Course;
use Spatie\MediaLibrary\HasMedia;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasMedia , JWTSubject
{
    use Notifiable , InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username',
        'password', 'avatar' ,
        'phone' , 'address',
        'gender','birthday',
        'level','job_title',
        'coures_time','whenWasthat',
        'whatsapp','email',
        'unHash_password',
        'payed', 'payed_id'
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'unHash_password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute()
    {
        return $this->getFirstMediaUrl('avatars');
    }
    
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class , 'courses_user');
    }

    

}
