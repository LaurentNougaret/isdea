<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormUpdateRequest;
use App\Result;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
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
		                ->select('projects.id as project_id', 'projects.name as project_name', 'results.project_content as content', 'results.id as result_id', 'form_project.form_id as form_id')
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




		// On submit, when I check the box (=it's not empty) with name = picture[0], I select the value associated "$result->content[27]" = 'upload/filename.jpg',
		if (!empty($request->picture[0])) {
			// Unserialize all datas saved from the DB ==> $result->project_content
			$datas_saved = unserialize($result->project_content);
			// Put NULL on the 27th position in the DB
			$datas_saved[29] = null;
			// Take ONLY the 29th array which is the path+filename = 'upload/filename.jpg'
			$path01 = $datas_saved[29];
			// Define $picture1 with $request->picture[0] which is 'upload/filename.jpg'
			$picture1 = $request->picture[0];
			// Get the storage path of the file+name
			$filename = storage_path() . "/" . $picture1;

//			dd($datas_saved, $picture1, $filename );
//			die();

			Storage::delete($filename);
		} elseif (empty($request->file('project_content.29'))) {
			// Unserialize all datas saved from the DB ==> $result->project_content
			$datas_saved = unserialize($result->project_content);
			// Take ONLY the 29th array which is the path+filename = 'upload/filename.jpg'
			$path01 = $datas_saved[29];
		} else {
			$path01 = $request->file('project_content.29')->store('upload');
			$image_resize = Image::make(Storage::get($path01))->resize(1400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->encode();
			Storage::put($path01, $image_resize);
		}

		if (!empty($request->picture[1])) {
			$datas_saved = unserialize($result->project_content);
			$datas_saved[30] = null;
			$path02 = $datas_saved[30];
			$picture2 = $request->picture[1];
			$filename = storage_path() . $picture2;
			File::delete($filename);
		}elseif (empty($request->file('project_content.30')))
		{
			$last_file_name = unserialize($result->project_content);
			$path02 = $last_file_name[30];
		} else {
			$path02 = $request->file('project_content.30')->store('upload');
			$image_resize = Image::make(Storage::get($path02))->resize(1400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->encode();
			Storage::put($path02, $image_resize);
		}
		$all_request = $request->project_content;
		$upload_file01 = ['29' => $path01];
		$upload_file02 = ['30' => $path02];

		$merge_request = array_replace($all_request, $upload_file01, $upload_file02);
		$serialize['project_content'] = serialize($merge_request);
		$result->update($serialize);

		return redirect()->route('result.edit', [
			'result' => $result,
		]);
	}
}