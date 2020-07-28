<?php

namespace App\Models;

use Baum\Node;

class Zeb extends Node
{
    protected $fillable = ['user_id', 'parent_id', 'lft', 'rgt', 'depth'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
