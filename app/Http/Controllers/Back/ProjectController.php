<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
	public function index()
	{
		return view('back.project.index');
	}
}
