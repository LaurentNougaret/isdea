<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProjectController extends Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$projects = DB::table('projects')
		              ->join('project_user', 'projects.id', '=', 'project_user.project_id')
		              ->join('users', 'users.id', '=', 'project_user.user_id')
		              ->join('units', 'projects.unit_id', '=', 'units.id')
		              ->join('results', 'projects.id', '=', 'results.project_id')
                        ->join('form_project', 'projects.id', '=', 'form_project.project_id')
                        ->join('forms', 'form_project.form_id', '=', 'forms.id')
		              ->where('users.id', '=', Auth::id())
		              ->select('projects.*', 'projects.id as number','projects.name as project', 'users.lastname as user', 'units.name as unit', 'units.area as area','results.progress as progress', 'forms.id as form')
		              ->Orderby('unit', 'ASC')
		              ->paginate(10);
		dump($projects);
		return view('front.project.index', ['projects' => $projects]);
	}


	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function edit($id)
	{

	}


	/**
	 * @param Request $request
	 * @param $id
	 */
	public function store(Request $request, $id)
	{

	}
}
