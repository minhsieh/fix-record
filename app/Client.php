<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
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
}
