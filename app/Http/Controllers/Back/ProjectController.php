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
                            ->join('form_project', 'projects.id' , '=', 'form_project.project_id' )
                            ->select('form_project.form_id')
                            ->join('forms', 'form_project.form_id', '=', 'forms.id')
		                   ->select('projects.*', 'projects.name as project', 'units.name as unit', 'units.area as area', 'results.progress as progress', 'forms.id as forms')
		                   ->Orderby('unit', 'ASC')
		                   ->where('projects.name', 'like', '%' . $search . '%')
		                   ->orWhere('units.name', 'like', '%' . $search . '%')
		                   ->orWhere('units.area', 'like', '%' . $search . '%')
		                   ->orWhere('results.progress', 'like', '%' . $search . '%')
		                   ->paginate(10);
		dump($projects);
		return view('project.index', ['projects' => $projects]);
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
			                 ->with('message', __('message.project_delete'));
		} else {
			return redirect()->route('projects.index')
			                 ->with('message', __('message.please_select'));
		}
	}
}
