<?php

namespace App\Http\Controllers\Back;

use App\Group;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Repositories\SearchRepository;
use App\Http\Requests\UserUpdateRequest;
use App\Language;
use App\Role;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use App\Repositories\UserReposity;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{

	use SendsPasswordResetEmails;

	/* Users Management */

    /**
     * UserController constructor.
     * @param UserReposity $userRepository
     * @param SearchRepository $searchRepository
     * @internal param UserReposity $repository
     */
	public function __construct(UserReposity $userRepository, SearchRepository $searchRepository)
    {
        $this->userRepository = $userRepository;
        $this->nbrPages = config('app.nbrPages.back.users');

        $this->searchRepository = $searchRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
//        $search = str_replace(' ', '', $search);
//        $filters[] = ['lastname', 'email', 'roles.name', 'groups.name'];
        $search = \Request::get('search');
//        $filter = $request->get('filters');
        $users = User::join('groups', 'users.group_id', '=', 'groups.id')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->join('project_user', 'users.id', '=', 'project_user.user_id')
            ->select('project_user.project_id')
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



//        if($search == null) {
//            $users = User::join('groups', 'users.group_id', '=', 'groups.id')
//                ->join('roles', 'users.role_id', '=', 'roles.id')
//                ->join('project_user', 'users.id', '=', 'project_user.user_id')
//                ->select('project_user.project_id')
//                ->join('projects', 'project_user.project_id', '=', 'projects.id')
//                ->OrderBy('lastname', 'ASC')
//                ->select('users.*', 'roles.name as role', 'groups.name as group', 'projects.name as project')
//                ->paginate('10');
//            return view('back.user.index', ['users' => $users]);
//        }elseif(($search != null) && ($filter == null)){
//            $users = User::join('groups', 'users.group_id', '=', 'groups.id')
//                ->join('roles', 'users.role_id', '=', 'roles.id')
//                ->join('project_user', 'users.id', '=', 'project_user.user_id')
//                ->select('project_user.project_id')
//                ->join('projects', 'project_user.project_id', '=', 'projects.id')
//                ->OrderBy('lastname', 'ASC')
//                ->select('users.*', 'roles.name as role', 'groups.name as group', 'projects.name as project')
//                ->where(function($users) use ($search){
//                    $users->where('lastname', 'like', '%' . $search . '%')
//                        ->orWhere('email', 'like', '%' . $search . '%')
//                        ->orWhere('roles.name', 'like', '%' . $search . '%')
//                        ->orWhere('groups.name', 'like', '%' . $search . '%')
//                        ->paginate('10');
//                });
//            return view('back.user.index', ['users' => $users]);
//            }elseif(($search != null) && ($filter != null)){
//        $users = User::where(function ($users) use ($search) {
//            $users->where('$filters[0]', 'like', '%' . $search . '%')
//                ->orWhere('$filters[1]', 'like', '%' . $search . '%')
//                ->orWhere('$filters[2]', 'like', '%' . $search . '%')
//                ->orWhere('$filters[3]', 'like', '%' . $search . '%')
//                ->paginate('10');
//        });
//            return view('back.user.index', ['users' => $users]);
//        }


//                if(!is_null($search)) {
//                    foreach($search as $field => $value){
//                        if($value == ''){
//                           $users->where('lastname', 'like', '%' . $search . '%')
//                        }
//                    }
//                }

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
		                 ->with('message', Lang::get('message.bigger'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Request $request)
	{
        User::destroy($request->users);
        return back();
//        $user = User::find($id);
//        $user->delete();
//        return redirect('admin/users')->with('success','Product has been  deleted');

    }
}

