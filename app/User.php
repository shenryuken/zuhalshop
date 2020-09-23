<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        if(Auth::user()->type == 1){
            return true;
        }
        else
        {
            return false;
        }
    }

    public function wallet()
    {
        return $this->hasOne('App\Models\Wallet')->withDefault();
    }

    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function addresses()
    {
        return $this->hasMany('App\Models\Address');
    }

    public function referrer()
    {
        return $this->belongsTo('App\User', 'referred_by', 'id');
    }

    public function referrals()
    {
        return $this->hasMany('App\User', 'referred_by');
    }

    public function account()
    {
        return $this->hasOne('App\Models\Account');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function zesNodes()
    {
        return $this->hasMany('App\Models\Zes');
    }

    public function zebNodes()
    {
        return $this->hasMany('App\Models\Zeb');
    }
}
