<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
    public function state()
    {
    	return $this->belongsTo('App\Models\State');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
