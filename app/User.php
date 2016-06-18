<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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
        'phone',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function categories()
    {
        return $this->hasMany('App\Category', 'user_id');
    }

    public function clients()
    {
        return $this->hasMany('App\Client' , 'user_id');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket' , 'user_id');
    }
}
