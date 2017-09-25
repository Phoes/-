<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $fillable = ['entry_id', 'turbidity', 'temperature', 'timelog'];
}
