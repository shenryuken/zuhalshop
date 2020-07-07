<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'current_balance', 'sale_bonus',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction')->withDefault();
    }
}
