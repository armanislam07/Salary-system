<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanHistory extends Model
{
    protected $fillable = [
    	'loan_amount',
    	'per_month_amount',
    	'due_amount',
    ];
}
