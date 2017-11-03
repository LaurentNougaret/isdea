@extends('layouts.template')
@extends('layouts.navbar')
@section('content')
    <form action="{{ route('users.destroy') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
    <div class="text-center user-title mt-5 mb-5">
        <h1>Gestion des utilisateurs</h1>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="input-group col-md-3">
                <input class="form-control rounded-1 py-1" type="search" value="" id="example-search-input">
                <span class="input-group-btn">
        <button class="btn btn-outline-secondary" type="button">
            <i class="fa fa-search fa-1x"></i>
        </button>
            </span>
            </div>
            <label class="col-md-1 ml-3">
                <input class="field mx-1" name="agree" type="checkbox" value="1">Nom
            </label>
            <label class="col-md-1">
                <input class="field mx-1" name="agree" type="checkbox" value="1">Email
            </label>
            <label class="col-md-1">
                <input class="field mx-1" name="agree" type="checkbox" value="1">Rôle
            </label>
            <label>
                <input class="field mx-1" name="agree" type="checkbox" value="1">Groupe
            </label>
        </div>
    </div>

    <div class="row justify-content-end mt-2">
        <a href="{{ route('users.create') }}" class="add_user">
        <i class="fa fa-user-plus fa-2x col-1 mr-4" aria-hidden="true" href="{{ route('users.create') }}"></i>
        </a>
    </div>
    <table class="table table-hover mt-3">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Rôle</th>
            <th scope="col">Groupe</th>
            <th scope="col">Projet</th>
            <th style="width: 8px;">
                <input type="checkbox" class="group-checkable"  data-set="#sample_1 .checkboxes" />
            </th>
            {{--<th><i class="fa fa-trash fa-2x" aria-hidden="true" href="{{  action('Back\UserController@destroy' , $user->id) }}"></i></th>--}}
        </tr>
        </thead>
        <form>

        @foreach($users as $user)

            <tr class="odd gradeX">
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->project }}</td>
                <td>
                    <input type="checkbox" class="checkbox" name="users[]" value="{{ $user->id }}" />
                </td>
                {{--<td><form action="{{ action('Back\UserController@destroy', $user->id) }}" method="post">--}}
                    {{--{{ csrf_field() }}--}}
                        {{--{{ method_field('DELETE') }}--}}
                    {{--<a class="" href="">--}}
                        {{--<i class="fa fa-trash fa-2x" aria-hidden="true"></i>--}}
                    {{--</a>--}}
                        {{--<input name="_method" type="hidden" value="DELETE">--}}
                        {{--<button class="btn btn-danger" type="submit">Delete</button>--}}
                    {{--</form>--}}
                {{--</td>--}}

                {{--<td><label>--}}
                        {{--<input class="field ml-2" name="checked[]" type="checkbox" value="{{ $user->id }}"/>--}}
                    {{--</label>--}}
                {{--</td>--}}
            </tr>
        @endforeach
            <button class="btn btn-danger">Delete Checked</button>
        </form>
        </tbody>
    </table>
    <nav aria-label="Page navigation example mt-3">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="{{ $users->links('layouts.pagination') }}">Previous</a></li>
            <li class="page-item"><a class="page-link" href="{{ $users->links('layouts.pagination') }}">1</a></li>
            <li class="page-item"><a class="page-link" href="{{ $users->links('layouts.pagination') }}">2</a></li>
            <li class="page-item"><a class="page-link" href="{{ $users->links('layouts.pagination') }}">3</a></li>
            <li class="page-item"><a class="page-link" href="{{ $users->links('layouts.pagination') }}">Next</a></li>
        </ul>
    </nav>
@endsection