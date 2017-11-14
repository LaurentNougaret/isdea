<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Project;

class ProjectController extends Controller
{
	public function index()
	{
		$projects = Project::join('units', 'projects.unit_id', '=', 'units.id')
		                   ->select('projects.*', 'units.name as unit')->get();
		return view('back.project.index', ['projects' => $projects]);
	}
}
