<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = 
    [
    	'project_id',
    	'emp_name',
    	'mobile',
    	'dob',
    	'designation',
    	'joinning_date',
    	'release_date',
    	'salary',
        'home_allowns',
        'medicle_allowns',
    ];
}
