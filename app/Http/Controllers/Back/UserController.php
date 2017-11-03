<?php

namespace App\Http\Controllers\Back;

use App\Group;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Repositories\SearchRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Repositories\UserReposity;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{
	/* Users Management */

    /**
     * UserController constructor.
     * @param UserReposity $repository
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
    public function index()
    {
        $users = $this->userRepository->getOrder($this->nbrPages);

        return view('back.user.index', ['users' => $users]);
    }


    public function search()
    {
        $keyword = Input::get('keyword', '');
        $users = User::SearchByKeyword($keyword)->get();

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
//$groups->dd();
		return view('back.user.create-account', [
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
	public function show()
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
	public function destroy(Request $request)
	{
        User::destroy($request->users);
        return back();
//        $user = User::find($id);
//        $user->delete();
//        return redirect('admin/users')->with('success','Product has been  deleted');

    }
}
