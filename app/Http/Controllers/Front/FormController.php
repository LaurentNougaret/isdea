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
//
		$request->project_content;
//		dd($request);

//		$file = $request->project_content[27];
//		dd($file);

		$path = $request->file('project_content.27')->store('upload');
//		dd($path);


		$serialize['project_content'] = serialize($request->project_content);
		$result->update($serialize);
//
//		return redirect()->route('result.edit', [
//			'result' => $result,
//		]);




//		if ($request->hasFile($result->content[27])) {
//			$filename = $request->old('content[27]');
//		}

//		dd($result->project_content = $path);

		//Récupérer le chemin du fichier en chaîne de caractère
		//		foreach($request->files as $files) {
//			foreach($files as $file) {
//				dd($file->getClientOriginalName());
//			}
//		}


//		a:3:{s:1:"a";i:1;s:1:"b";i:2;s:1:"c";a:2:{s:1:"a";i:1;s:1:"b";i:2;}}

//		a:31:{i:0;s:5:"00000";i:1;s:5:"11111";i:2;s:5:"22222";i:3;s:5:"33333";i:4;s:5:"44444";i:5;s:5:"55555";i:6;s:5:"66666";i:7;s:5:"77777";i:8;s:5:"88888";i:9;s:5:"99999";i:10;s:10:"1010101010";i:11;s:14:"11-11-11-11-11";i:12;s:14:"12-12-12-12-12";i:13;s:14:"13-13-13-13-13";i:14;s:14:"14-14-14-14-14";i:15;s:14:"15-15-15-15-15";i:16;s:14:"16-16-16-16-16";i:17;s:14:"17-17-17-17-17";i:18;s:14:"18-18-18-18-18";i:19;s:14:"19-19-19-19-19";i:20;s:14:"20-20-20-20-20";i:21;s:14:"21-21-21-21-21";i:22;s:14:"22-22-22-22-22";i:23;s:14:"23-23-23-23-23";i:24;s:14:"24-24-24-24-24";i:25;s:14:"25-25-25-25-25";i:26;s:14:"26-26-26-26-26";i:27;N;i:28;s:14:"28-28-28-28-28";i:29;s:14:"29-29-29-29-29";i:30;s:14:"30-30-30-30-30";}

	}
}