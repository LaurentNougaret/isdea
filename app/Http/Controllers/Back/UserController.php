<?php

namespace App\Http\Controllers\Back;

use App\Group;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Language;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
	/* Users Management */

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//        $users = User::get();
    $users = User::join('groups', 'users.group_id', '=', 'groups.id')
        ->join('project_user', 'users.id', '=', 'project_user.user_id')
        ->select('project_user.project_id')
        ->join('projects', 'project_user.project_id', '=', 'projects.id')
        ->select('users.*', 'groups.name', 'projects.name as project')->get();

        echo dump($users);

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
		return view('back.user.create-account', [
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
		                 ->with('success', 'User created successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
//		$account = User::find($id);
//		return view('back.user.edit-account')->with('account', $account);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$account = User::find($id);
		return view('back.user.edit-account')->with('account', $account);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
        $user = User::find($id);
        $user->delete();
        return redirect('users.index')->with('success','Product has been  deleted');
//	    User::destroy($id);
//    return redirect()->route('users.index');
    }
}
