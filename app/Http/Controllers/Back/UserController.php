<?php

namespace App\Http\Controllers\Back;

use App\Group;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
    $users = DB::table('users')->get();

        return view('back.user.index', ['users' => $users]);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$groups = Group::select('name')->distinct()->get();
		return view('back.user.account', [
			'groups' => $groups,
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

        User::create($request)->all();
        return redirect()->route('admin.users.create')
            ->with('success','Article created succesfully');
//		$user->firstname = Input::get('firstname');
//		$user->lastname = Input::get('lastname');
//		$user->email = Input::get('email');
//		$user->role = Input::get('role');
//		$user->language = Input::get('language');
//		$user->group_id = Input::get('group_id');

//		$user->password = Input::get('password');


//		$user = User::create($request->all());
//
//
//		$password = $user->password;


//		$user->fill(['password' => $pw])->save();

//		return redirect()->route('back.user.index')
//			->with('success', 'User created successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
//	    $account = User::find($id);
//    	return view('back.user.account')->with('account', $account);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
//	    $account = User::find($id);
//	    return view('back.user.account')->with('account', $account);
	}

    /**
     * Update the specified resource in storage.
     *
     * @param UserCreateRequest|Request $request
     * @param  int $id
     * @return Response
     */
	public function update(UserCreateRequest $request, $id)
	{
        User::find($id)->update($request->all());
        return redirect()->route('admin.users')
            ->with('success','Article updated successfully');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{

	}
}
