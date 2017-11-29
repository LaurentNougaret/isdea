<?php

namespace App\Http\Controllers\Front;

use App\Form;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormUpdateRequest;
use App\Project;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index()
    {
        $user = Auth::user();

//    return view('project.form', $user);
    }

    /**
     * @param $project_id
     * @param $form_id
     * @return $this
     */
    public function edit($project_id, $form_id){
        dump($project_id, $form_id);
        $form = Project::find($project_id)
            ->join('results', 'projects.id', '=', 'results.project_id' )
            ->where('results.project_id', '=', $project_id)
            ->select('projects.id as project_id', 'results.project_content as project_content', 'results.id as result_id' )
            ->first();


        return view('form.form')->with([
            'project_id' => $project_id,
            'form_id' => $form_id,
            'form' => $form,
            ]);
    }

    /**
     * @param FormUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(FormUpdateRequest $request, $project_id, $form_id)
    {

          $result = Result::where('project_id', '=', $project_id);
          $result->update($request->only('project_content'));

//        dd($request);


        return redirect()->route('project.form.edit', ['project' => $project_id,
            'form' => $form_id]);


    }
//
//    public function __construct()
//
//    {
//
//        $this->middleware('auth');
//
//    }
//
//public function fileUpload(Request $request){
//    $this->validate($request, [
//
//        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//
//    ]);
//
//
//    $image = $request->file('image');
//
//    $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
//
//    $destinationPath = public_path('/images');
//
//    $image->move($destinationPath, $input['imagename']);
//
//
//    $this->postImage->add($input);
//
//
//    return back()->with('success','Image Upload successful');
//
//
//}

}