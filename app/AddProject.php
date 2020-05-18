<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddProject extends Model
{
    protected $attributes = [
       'veriation_amount' => 0,
    ];
    protected $fillable = [
    	'project_id',
    	'project_name',
    	'contract_amount',
    	'veriation_amount',
    	'project_location',
    ];
}
