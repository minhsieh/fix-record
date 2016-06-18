<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
    	'user_id',
    	'first_name',
    	'last_name',
    	'phone',
    	'email',
    	'address',
    	'sex',
    	'vip_code',
    	'comment'
    ];

    public function tickets()
    {
    	return $this->hasMany('App\Ticket','client_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
