<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'short_code', 'status', 'country_id', 'referred_by',
    ];

    public function accounts()
    {
    	return $this->hasMany('App\Models\Account');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
