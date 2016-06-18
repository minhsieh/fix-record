<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function tickets()
    {
    	return $this->hasMany('App\Ticket','category_id');
    }
}
