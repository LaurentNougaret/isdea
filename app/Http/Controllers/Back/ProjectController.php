<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Project;

class ProjectController extends Controller
{
	public function index()
	{
		$projects = Project::join('project_user', 'projects.id', '=', 'project_user.project_id')
		                   ->select('project_user.user_id')
		                   ->join('form_project', 'form.id', '=', 'form_project.project_id')
		                   ->select('form_project.form_id')
		                   ->join('units', 'projects.unit_id', '=', 'units.id')
		                   ->select('units.name as unit', 'projects.*');
		return view('back.project.index', ['projects' => $projects]);
	}
}
