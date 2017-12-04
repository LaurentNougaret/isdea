<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormUpdateRequest;
use App\Result;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
	/**
	 * @param $id
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id){

		$result = Result::find($id)
		                ->join('projects', 'results.project_id', '=', 'projects.id')
		                ->join('form_project', 'projects.id', '=', 'form_project.project_id')
		                ->select('projects.id as project_id', 'results.project_content as content', 'results.id as result_id', 'form_project.form_id as form_id', 'projects.name as project_name')
		                ->first();
		$result->content = unserialize($result->content);

		return view('form.form')->with([
			'result' => $result,
		]);
	}

	/**
	 * @param FormUpdateRequest $request
	 * @param $result_id
	 * @return \Illuminate\Http\RedirectResponse
	 *
	 */
	public function update(FormUpdateRequest $request, $result_id)
	{
		$result = Result::find($result_id);

//		dd($result);


//		$serialize['project_content'] = serialize($request->project_content);
//		$result->update($serialize);


		return redirect()->route('result.edit', [
			'result' => $result,
		]);
	}
}