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

//		dd($result->content[1]);
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
//        dd($request);

        if($request->file('file1') != null) {
            $path1 = $request->file('file1')->store('upload');
        }else if(empty($request->project_content[7])) {
            $path1 = null;
        }elseif($request->project_content[7] == null){
            $path1 = $request->project_content[7];
        }

        if($request->file('file2') != null) {
            $path2 = $request->file('file2')->store('upload');
        } elseif(empty($request->project_content[8])){
            $path2 = null;
        } else {
            $path2 = $request->project_content[8];
        }

        $array1 = [$request->project_content];
        $array2[0] = $path1;
        $array3[0] = $path2;

        $array = array_merge($array1,$array2,$array3);
//        dd($array);
        $serialize['project_content'] = serialize($array);
        $result->update($serialize);

        return redirect()->route('result.edit', [
            'result' => $result_id,
        ]);

//        $result = Result::find($result_id);
//
//        dd(count($result->project_content));

//        if($request->file('project_content.27') != null) {
//			$path01 = $request->file('project_content.27')->store('upload');
//		} elseif(count($result->project_content) == 30) {
//            $path01 = null;
////            $upload_file01 = ['27' => $path01];
//        } else {
//            $path01 = $request->project_content[27];
//		}
//
//		if($request->file('project_content.31') != null) {
//			$path02 = $request->file('project_content.31')->store('upload');
//		} else {
//			$path02 = $request->project_content[31];
//		}
//        dd($path02);
//		$all_request = $request->project_content;
//		$upload_file01 = ['27' => $path01];
//		$upload_file02 = ['31' => $path02];
//		$merge_request = array_replace($all_request, $upload_file01, $upload_file02);
//		$serialize['project_content'] = serialize($merge_request);
//		$result->update($serialize);
//
//		return redirect()->route('result.edit', [
//			'result' => $result,
//		]);
//
	}
}