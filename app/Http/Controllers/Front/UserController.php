<?php

namespace App\Http\Controllers\Front;

use App\Group;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\ProUpdateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Language;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class UserController extends Controller
{
    public function profile() {
        $id = Auth::id();
        $user = User::find($id)
            ->join('groups', 'users.group_id', '=', 'groups.id')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->join('languages', 'users.language_id', '=', 'languages.id')
            ->select('users.*', 'roles.name as role', 'groups.name as group', 'languages.name as saved_language')
            ->where('users.id', '=', $id)
            ->first(); // to retrieve ONE record with first() not a collection with get()
        $groups = Group::select('name', 'id')->distinct()->get();
        $roles = Role::select('name', 'id')->distinct()->get();
        $languages = Language::select('name', 'id')->distinct()->get();
        return view('front.profile')->with([
            'user' => $user,
            'groups' => $groups,
            'roles' => $roles,
            'languages' => $languages,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProfileUpdateRequest|Request $request
     * @param  int $id
     *
     * @return Response
     */
    public function update(ProfileUpdateRequest $request, $id)
    {
        $user = User::find($id);
//            ->join('groups', 'users.group_id', '=', 'groups.id')
//            ->join('roles', 'users.role_id', '=', 'roles.id');
        $user->fill($request->only( 'language_id'))->get();
        if($user->password !== $request->password) {
            $user->password = bcrypt($request->password);
        };
        $user->save();
        return redirect()->route('profile')
            ->with('message', Lang::get('message.update'));
    }
}
