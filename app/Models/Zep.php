<?php

namespace App\Models;

use Baum\Node;

class Zep extends Node
{
	protected $table = 'zep'; 

    protected $fillable = ['user_id', 'parent_id', 'lft', 'rgt', 'depth', 'name'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
