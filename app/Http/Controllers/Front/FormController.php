<?php

namespace App\Http\Controllers\Front;

use App\Form;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormUpdateRequest;
use App\Project;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
	public function index()
	{
		$user = Auth::user();

//    return view('project.form', $user);
	}

	/**
	 * @param $id
	 *
	 * @return $this
	 */
	public function edit($id){
		$project = Project::find($id)
		                  ->join('results', 'results.project_id', '=','projects.id')
		                  ->join('form_project', 'projects.id', '=', 'form_project.project_id')
		                  ->where('projects.id', '=', $id)
//		                  ->where('results.project_id', '=', $id) // works with this line or the one before
                          ->select('projects.id as project_id', 'results.project_content as content', 'results.id as results_id', 'form_project.form_id as form_id')
		                  ->first();

		return view('form.form')->with([
			'project' => $project,
		]);
	}

	/**
	 * @param FormUpdateRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(FormUpdateRequest $request, $id)
	{
		$result = Result::find($id);
		$result->update($request->only('project_content'));

		return redirect()->route('project.form.index')->with('message', Lang::get('message.user_update'));
	}


}