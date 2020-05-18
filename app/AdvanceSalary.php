<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvanceSalary extends Model
{
    protected $fillable = [
    	'amount',
    	'advance_month',
    ];
}
