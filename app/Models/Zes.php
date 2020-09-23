<?php

namespace App\Models;

use Baum\Node;

class Zes extends Node
{
	protected $table = 'zes';
	
    protected $fillable = ['user_id', 'parent_id', 'lft', 'rgt', 'depth', 'name'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
