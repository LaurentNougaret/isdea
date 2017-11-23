<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public function projects()
    {
    	return $this->belongsToMany(Project::class);
    }

    public function form()
    {
        return $this->belongsTo(Group::class);
    }
}
