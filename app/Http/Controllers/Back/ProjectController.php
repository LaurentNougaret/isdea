<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$search = Request()->get('search');

		$projects = Project::join('units', 'projects.unit_id', '=', 'units.id')
		                   ->join('results', 'projects.id', '=', 'results.project_id')
		                   ->select('projects.id as id', 'projects.name as name', 'units.name as unit', 'units.area as area', 'results.progress as progress', 'results.id as result_id')
		                   ->Orderby('unit', 'ASC')
		                   ->where('projects.name', 'like', '%' . $search . '%')
		                   ->orWhere('units.name', 'like', '%' . $search . '%')
		                   ->orWhere('units.area', 'like', '%' . $search . '%')
		                   ->orWhere('results.progress', 'like', '%' . $search . '%')
		                   ->paginate(10);

		return view('front.project.index', ['projects' => $projects]);
	}
}

