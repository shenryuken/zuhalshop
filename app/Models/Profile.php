<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Profile;

class Profile extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'first_name', 
        'last_name', 
        'nric', 
        'dob', 
        'gender', 
        'mobile_no', 
        'contact_no_office', 
        'contact_no_home',
        'about_me',
    ]; 

    protected $dates = [
        'dob',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
