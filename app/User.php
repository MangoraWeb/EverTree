<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','surname', 'email', 'password','email','city','address','telephone','bdate','actype',
    ];

    public function handings()
    {
        return $this->hasMany('App\Handings');
    }

    public function events()
    {
        return $this->belongsToMany('App\Event');
    }

    public function actions()
    {
        return $this->hasMany('App\Action');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
