<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function invoice()
    {
    	return $this->hasOne('App\Models\Invoice');
    }

    public function orderItem()
    {
    	return $this->hasMany('App\Models\OrderItem');
    }
}
