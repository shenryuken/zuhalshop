<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function users()
    {
    	return $this->hasMany('App\User');
    }

    public function states()
    {
        return $this->hasMany('App\Models\State');
    }
}
