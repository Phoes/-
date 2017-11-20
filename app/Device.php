<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //
     protected $fillable = ['turbidity', 'temperature','ph', 'timelog','type','latitude','langtitude ','location '];
}
