<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;


class ProjectController extends Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$projects = Project::join('units', 'projects.unit_id', '=', 'units.id')
		                   ->join('results', 'projects.id', '=', 'results.project_id')
		                   ->select('projects.*', 'units.name as unit', 'units.area as area', 'results.progress as progress')
		                   ->paginate(10);
		return view('back.project.index', ['projects' => $projects]);
	}


	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 * @internal param Project $project
	 *
	 */
	public function destroy(Request $request)
	{
		if(!empty($request->projects)){
			Project::destroy($request->projects);
			return redirect()->route('projects.index')
			                 ->with('message', Lang::get('message.project_delete'));
		}else{
			return redirect()->route('projects.index')
			                 ->with('message', Lang::get('message.please_select'));
		}
	}
}
