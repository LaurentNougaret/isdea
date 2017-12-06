<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormUpdateRequest;
use App\Result;

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

//		dd($result->content[27]); // content: false

		$file_uploaded = Storage::get('$result->content[27]');



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


//		dd($request); // REQUEST:result_id = null ; project_content 0 à 30 sans la 27 => null / CONVERTEDFILES: project_content 27 => "file.jpg"
//die();
//		dd($request->project_content); // 0 à 30 sans 27
//		dd($request->project_content[27]); // n'existe pas



		if (empty($request->project_content[27])) {
			$path01 = null;
		} elseif($request->file('project_content.27') != null) {
			$path01 = $request->file( 'project_content.27' )->store( 'upload' );
		}
//
//		if (empty($request->project_content[31])) {
//			$path02 = null;}
//		elseif($request->file('project_content.31') != null) {
//			$path02 = $request->file('project_content.31')->store('upload');
//		} else {
//			$path02 = $request->project_content[31];
//		}

		$all_request = $request->project_content;
		$upload_file01 = ['27' => $path01];
//		$upload_file02 = ['31' => $path02];

		$merge_request = array_replace($all_request, $upload_file01);
		$serialize['project_content'] = serialize($merge_request);
		$result->update($serialize);

		return redirect()->route('result.edit', [
			'result' => $result,
		]);

//		a:32:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;N;i:5;N;i:6;N;i:7;N;i:8;N;i:9;N;i:10;N;i:11;N;i:12;N;i:13;N;i:14;N;i:15;N;i:16;N;i:17;N;i:18;N;i:19;N;i:20;N;i:21;N;i:22;N;i:23;N;i:24;N;i:25;N;i:26;N;i:28;N;i:29;N;i:30;N;i:27;s:52:"upload/FXh3iBMpB12nkF0l6f8Qw2OW4rnLzYfiXnHpMEgE.jpeg";i:31;s:52:"upload/V2MZCuy7kTGZSObIjSFfOJaTjKhUb3xi8ETEXk14.jpeg";}

	}
}