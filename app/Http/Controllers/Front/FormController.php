<?php

namespace App\Http\Controllers\Front;

use App\Form;
use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index()
    {
        $user = Auth::user();

    return view('project.form', $user);
    }

    public function edit($project){
        $form = Project::find($project)
        ->join('form_project','projects.id','=', 'form_project.project_id')
        ->join('forms','form_project.form_id','=','forms.id')
        ->where('projects.id','=', $project)
        ->select('forms.*', 'project.*');
        return view('form.form', $form);
    }


    public function update(Request $request)
    {


        $path = $request->file('picture')->store('app/storage/upload');

        return $path;

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