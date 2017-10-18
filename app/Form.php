<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public function projects()
    {
    	$this->belongsToMany(Project::class);
    }
}
