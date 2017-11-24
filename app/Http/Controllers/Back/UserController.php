<?php

namespace App\Http\Controllers\Back;

use App\Group;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Language;
use App\Role;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
	use SendsPasswordResetEmails;

	/* Users Management */

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

//		Mail::send('back.emails.reminder', ['user' => 'Julien'], function ($m) {
//			$m->from('julien@free.fr', 'Your Application');
//			$m->to('toto@free.fr', 'Julien Boyer')->subject('Your Reminder!');
//		});

		$search = \Request::get('search');

		$users = User::join('groups', 'users.group_id', '=', 'groups.id')
		             ->join('roles', 'users.role_id', '=', 'roles.id')
		             ->join('project_user', 'users.id', '=', 'project_user.user_id') // With User, connect project_user saying my users.id = project_user.user_id
		             ->join('projects', 'project_user.project_id', '=', 'projects.id')
		             ->OrderBy('lastname', 'ASC')
		             ->select('users.*', 'roles.name as role', 'groups.name as group', 'projects.name as project')
		             ->where('lastname', 'like', '%' . $search . '%')
		             ->orWhere('email', 'like', '%' . $search . '%')
		             ->orWhere('roles.name', 'like', '%' . $search . '%')
		             ->orWhere('groups.name', 'like', '%' . $search . '%')
		             ->paginate('10');
		return view('back.user.index', ['users' => $users]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$groups = Group::select('name', 'id')->distinct()->get();
		$roles = Role::select('name', 'id')->distinct()->get();
		$languages = Language::select('name', 'id')->distinct()->get();
		return view('back.user.create', [
			'groups' => $groups,
			'roles' => $roles,
			'languages' => $languages,
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param UserCreateRequest|Request $request
	 *
	 * @return \Illuminate\Http\Response
	 * @internal param User $user
	 *
	 */
	public function store(UserCreateRequest $request)
	{
		$user = new User();
		$user->fill($request->except('_token'));
		$user->password =  bcrypt(str_random(8));
		$user->save();
		return redirect()->route('users.index')
		                 ->with('message', Lang::get('message.user_create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$user = User::find($id)
		            ->join('groups', 'users.group_id', '=', 'groups.id')
		            ->join('roles', 'users.role_id', '=', 'roles.id')
		            ->join('languages', 'users.language_id', '=', 'languages.id')
		            ->select('users.*', 'roles.name as saved_role', 'groups.name as saved_group', 'languages.name as saved_language')
		            ->where('users.id', '=', $id)
		            ->first(); // to retrieve ONE record with first() not a collection with get()
		$groups = Group::select('name', 'id')->distinct()->get();
		$roles = Role::select('name', 'id')->distinct()->get();
		$languages = Language::select('name', 'id')->distinct()->get();
		return view('back.user.edit')->with([
			'user' => $user,
			'groups' => $groups,
			'roles' => $roles,
			'languages' => $languages,
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param UserUpdateRequest|Request $request
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update(UserUpdateRequest $request, $id)
	{
		$user = User::find($id);
		$user->fill($request->only('role_id', 'language_id', 'group_id'));
		if($user->password !== $request->password) {
			$user->password = bcrypt($request->password);
		};
		$user->save();
//		dump($request->only('email'));
//		$user->sendPasswordResetNotification($request->only('email'));
		return redirect()->route('users.index')
		                 ->with('message', Lang::get('message.user_update'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param Request $request
	 * @return Response
	 * @internal param int $id
	 */
	public function destroy(Request $request)
	{
		if(!empty($request->users)){
			User::destroy($request->users);
			return redirect()->route('users.index')
			                 ->with('message', Lang::get('message.user_delete'));
		}else{
			return redirect()->route('users.index')
			                 ->with('message', Lang::get('message.please_select'));
		}
	}
}
