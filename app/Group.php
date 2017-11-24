<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function users()
    {
    	return $this->hasMany(User::class);
    }

    public function forms()
    {
        return $this->hasMany(Form::class);
    }
}
