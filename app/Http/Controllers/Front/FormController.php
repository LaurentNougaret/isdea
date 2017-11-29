<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormUpdateRequest;
use App\Project;
use App\Result;
use Illuminate\Support\Facades\Auth;

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
//		                  ->where('results.project_id', '=', $id) // works with this line before, as well
                          ->select('projects.id as project_id', 'results.project_content as content', 'results.id as result_id', 'form_project.form_id as form_id')
		                  ->first();

		return view('form.form')->with([
			'project' => $project,
		]);
	}


	/**
	 * @param FormUpdateRequest $request
	 * @param $project_id
	 * @param $form_id
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 *
	 */
	public function update(FormUpdateRequest $request, $project_id, $form_id )
	{
		$result = Result::find($request->result_id);
		$result->update($request->only('project_content'));

		return redirect()->route('project.form.edit', [
			'project' => $project_id,
			'form' => $form_id,
		]);
	}
}