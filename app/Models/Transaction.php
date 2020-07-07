<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'wallet_id', 'amount', 'type', 'status', 'to_account',
    ];

    public function wallet()
    {
    	return $this->belongsTo('App\Models\Wallet');
    }
}
