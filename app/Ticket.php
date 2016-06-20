<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
    	'user_id',
    	'client_id',
    	'category_id',
    	'obj_model',
    	'obj_problem',
    	'obj_custom',
    	'obj_sn',
    	'fee',
    	'time_start',
    	'time_end',
    	'comment',
    	'status'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function client()
    {
    	return $this->belongsTo('App\Client');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
