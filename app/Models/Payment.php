<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $fillable = ['transaction_id', 'invoice_id', 'status'];
}
