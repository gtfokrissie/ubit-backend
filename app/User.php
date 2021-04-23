<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'photo',
        'user_level',
        'user_account',
        'nik',
        'gender',
        'phone',
        'birthday',
        'address',
        'job',
        'job_location',
        'about_me',
        'access_premium_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'deleted_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = ['deleted_at'];

    // Middleware JWT

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

    // End Middleware JWT

    // HasMany Function

    public function accessPremiumOrder()
    {
        return $this->hasMany(AccessPremiumOrder::class, 'user_id');
    }

    public function article()
    {
        return $this->hasMany(Article::class, 'user_id');
    }

    public function productOrder()
    {
        return $this->hasMany(ProductOrder::class, 'user_id');
    }

    public function classOnlineReview()
    {
        return $this->hasMany(ClassOnlineReview::class, 'user_id');
    }

    public function classOffline()
    {
        return $this->hasMany(ClassOffline::class, 'user_id');
    }

    public function event()
    {
        return $this->hasMany(Event::class, 'user_id');
    }

    // End HasMany Function
}
