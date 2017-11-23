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
    	return $this->hasOne(Result::class);
    }

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }

    public function forms()
    {
    	return $this->belongsToMany(Form::class);
    }
}
