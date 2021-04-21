<?php

namespace App;

use App\Course;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin  extends Authenticatable implements HasMedia
{
    use Notifiable , InteractsWithMedia;

    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
        'password','is_supervisor',
        'phone' , 'whatsapp',
        'address' , 'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
        return $this->getFirstMediaUrl('admins');
    }

    // public function getProductAmountAttribute()
    // {
    //     return $this->products->sum('productAmount');
    // }

    // public function getFixedAmountAttribute()
    // {
    //     return $this->products->sum('fiexdAmount');
    // }

    // public function getTotalPaymentAttribute()
    // {
    //     return $this->fixedAmount - $this->ProductAmount;
    // }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
