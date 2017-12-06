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
            ->select('projects.id as project_id', 'results.project_content as content', 'results.id as result_id', 'form_project.form_id as form_id')
            ->first();

        $result->content = unserialize($result->content);
//        dd($result->content);
//        $result->content = unserialize($result->content[0]);
//        dd($result);
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
//        dd($request);

        $result = Result::find($result_id);

        if($request->file('project1') != null) {
            $image = Input::file('project1');
            $path1 = $request->file('project1')->store('upload');
            Image::make($image->getRealPath())->resize(200, 200)->save($path1);
//            $image = Image::make(Input::file('project1'))->resize(300, 200)->update('upload');

//            $image = Image::make('/storage/app/public/' . $path1)->resize(300, 200);
//            dd($image);
//            $path1 = $image->store('upload');

//            Image::make(Input::file('storage/app/public/'.$path1))->resize(300, 200)->save($path1);
//            storage/app/public/upload/bvjE8Q4fZbnGKomxu9s1QZmzSvbLImA3toHtVfW5.jpeg

        } else {
            $path1 = $request->project_content[7];
        }

        if($request->file('project2') != null) {
            $path2 = $request->file('project2')->store('upload');
        } else {
            $path2 = $request->project_content[8];
        }

        $array1 = [$request->project_content];
        $array2[0] = $path1;
        $array3[0] = $path2;

        $array = array_merge($array1,$array2,$array3);

        $serialize['project_content'] = serialize($array);
        $result->update($serialize);

        return redirect()->route('result.edit', [
           'result' => $result_id,
        ]);
    }

}