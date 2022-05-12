<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
     use SoftDeletes;

    protected $fillable=[
    	'photo','type','date','venue','user_id'
    ];
}
