<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormUpdateRequest;
use App\Result;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;


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
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(FormUpdateRequest $request, $result_id)
	{
		$result = Result::find($result_id);

		if($request->file('project_content.27') != null) {
			$path01 = $request->file('project_content.27')->store('upload');
		} else {
			$path01 = $request->project_content[27];
		}

		if($request->file('project_content.31') != null) {
			$path02 = $request->file('project_content.31')->store('upload');
		} else {
			$path02 = $request->project_content[31];
		}

		$all_request = $request->project_content;
		$upload_file01 = ['27' => $path01];
		$upload_file02 = ['31' => $path02];
		$merge_request = array_replace($all_request, $upload_file01, $upload_file02);
		$serialize['project_content'] = serialize($merge_request);
		$result->update($serialize);

		return redirect()->route('result.edit', [
			'result' => $result,
		]);

	}
}