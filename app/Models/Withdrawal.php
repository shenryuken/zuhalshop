<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    public function account()
    {
    	return $this->belongsTo('App\Models\Account');
    }
}
