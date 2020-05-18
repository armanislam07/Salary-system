<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalarySheet extends Model
{
    protected $fillable = [
    	'basic',
    	'h_allowns',
    	'm_allowns',
    	'total',
    	'advance',
    	'loan',
    	'payment',
    	'salary_month',
    ];
}
