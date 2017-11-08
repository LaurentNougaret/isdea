@extends('layouts.template')
@extends('layouts.navbar')
@section('content')
    {{--<form action="{{ route('users.destroy') }}" method="post">--}}
    {{--<form action="{{ route('users.search') }}" method="get">--}}
    {{--{{ csrf_field() }}--}}
    {{--<input type="hidden" name="_method" value="delete">--}}
    <div class="text-center user-title mt-5 mb-5">
        <h1>Gestion des utilisateurs</h1>
    </div>
    <div class="container mt-3">

        {{--@include('layouts.search',['url'=>'user','link'=>'user'])--}}
        <form action="{{ url('admin/users') }}" method="get" class="navbar-form navbar-left" role="search" >
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" name="search" placeholder="Search...">
                <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"></i>
        </button>
                </span>
            </div>
        </form>
        <form action="{{ route('users.destroy') }}" method="post">
        {{--<div class="row">--}}
        {{--<div class="input-group col-md-3">--}}
        {{--<input class="form-control rounded-1 py-1" type="search" value="" id="example-search-input">--}}
        {{--<span class="input-group-btn">--}}
        {{--<button class="btn btn-outline-secondary" type="button">--}}
        {{--<i class="fa fa-search fa-1x"></i>--}}
        {{--</button>--}}
        {{--</span>--}}
    </div>
        <label class="col-md-1 ml-3">
        <input class="field mx-1" name="filters[]" type="checkbox" value="{{$filters = 'lastname' }}">Nom
        </label>
        <label class="col-md-1">
        <input class="field mx-1" name="filters[]" type="checkbox" value="{{$filters = 'email' }}">Email
        </label>
        <label class="col-md-1">
        <input class="field mx-1" name="filters[]" type="checkbox" value="{{$filters = 'roles.name' }}">Rôle
        </label>
        <label>
        <input class="field mx-1" name="filters[]" type="checkbox" value="{{$filters = 'groups.name' }}">Groupe
        </label>
        </div>
    </div>
    <form action="{{ route('users.destroy') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <div class="row justify-content-end mt-2">
            <a href="{{ action('Back\UserController@create') }}"><i class="fa fa-user-plus fa-2x col-1 mr-4" aria-hidden="true"></i></a>
        </div>
        <table class="table table-hover mt-3">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Rôle</th>
                <th scope="col">Groupe</th>
                <th scope="col">Projet</th>
                <th style="width: 8px;">
                    <input type="checkbox" class="group-checkable"  data-set="#sample_1 .checkboxes" />
                </th>
                <th><i class="fa fa-trash fa-2x" aria-hidden="true" href="{{  action('Back\UserController@destroy') }}"></i></th>
            </tr>
            </thead>
            {{--<form>--}}

            @foreach($users as $user)
                <tr class="odd gradeX">
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->group }}</td>
                    <td>{{ $user->project }}</td>
                    <td>
                        <input type="checkbox" class="checkbox" name="users[]" value="{{ $user->id }}" />
                    </td>
                </tr>
            @endforeach
            <button class="btn btn-danger">Delete Checked</button>
    </form>
    </tbody>
    </table>
    {{--<nav aria-label="Page navigation example mt-3">--}}
        {{--<ul class="pagination justify-content-center">--}}
            {{--<li class="page-item"><a class="page-link" href="{{ $users->links('layouts.pagination') }}">Previous</a></li>--}}
            {{--<li class="page-item"><a class="page-link" href="{{ $users->links('layouts.pagination') }}">1</a></li>--}}
            {{--<li class="page-item"><a class="page-link" href="{{ $users->links('layouts.pagination') }}">2</a></li>--}}
            {{--<li class="page-item"><a class="page-link" href="{{ $users->links('layouts.pagination') }}">3</a></li>--}}
            {{--<li class="page-item"><a class="page-link" href="{{ $users->links('layouts.pagination') }}">Next</a></li>--}}
        {{--</ul>--}}
    {{--</nav>--}}
    {{--</form>--}}
    {{--</form>--}}
    {{--</form>--}}
@endsection