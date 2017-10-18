<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function unit()
    {
    	return $this->belongsTo(Unit::class);
    }

    public function results()
    {
    	return $this->hasMany(Result::class);
    }
}
