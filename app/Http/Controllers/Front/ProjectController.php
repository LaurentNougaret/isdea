<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Project;
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
		              ->join('units', 'projects.unit_id', '=', 'units.id') // with Project, connect units saying my projects.unit_id = units.id
					  ->join('results', 'projects.id', '=', 'results.project_id') // with Project, connect results saying my projects.id = results.project_id
					  ->where('users.id', '=', Auth::id())
					  ->select('projects.*', 'projects.id as number','projects.name as project', 'users.lastname as user', 'units.name as unit', 'units.area as area')
//		              ->select('projects.*', 'projects.id as number','projects.name as project', 'units.name as unit', 'units.area as area', 'results.progress as progress', 'user.name as user')
//		              ->Orderby('unit', 'ASC')







//		                   ->join('project_user', 'projects.id', '=', 'project_user.project_id') // with Project, connect project_user saying my projects.id = project_user.project_id
//		                   ->select('project_user.user_id')
//		                   ->join('users', 'project_user.user_id', '=', 'users.id')

//		                   ->join('project_user', function ($join) {
//			$join->on('projects.id', '=', 'project_user.project_id')
//				->where('project_user.project_id', Auth::user()->project_user.project_id);

//				->where('project_user.project_id', '=', Auth::id());
//		})
//
//
//
                      ->paginate(10);
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
