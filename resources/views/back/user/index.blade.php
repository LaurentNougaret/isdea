@extends('layouts.template')
@extends('layouts.navbar')

@section('content')
    <div class="text-center user-title mt-5 mb-5">
        <h2>Gestion des utilisateurs</h2>
    </div>
    <div class="row col-md-12 justify-content-between">
        <div class="col-md-4 justify-content-left">
            <form action="{{ url('admin/users') }}" method="get" class="navbar-form navbar-left" role="search" >
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                    <span class="input-group-btn">
        <button class="btn btn-default-sm " type="submit">
            <i class="fa fa-search my-1"></i>
        </button>
                </span>
                </div>
            </form>
        </div>
        <form action="{{ route('users.destroy') }}" method="post">
            {{ csrf_field() }}
            <div class="col-md-12 pr-0 row justify-content-between">
                <div class="col-md-4 pr-1 mr-1">
                    <a href="{{ action('Back\UserController@create') }}"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col col-md-4 ml-0 pr-0">
                    <a><button class="submit" type="submit"><i class="fa fa-trash fa-2x " aria-hidden="true" ><input type="hidden" name="_method" value="delete"></i></button></a>
                </div>
            </div>
    </div>
    {{--<div class="row">--}}
    {{--<div class="input-group col-md-3">--}}
    {{--<input class="form-control rounded-1 py-1" type="search" value="" id="example-search-input">--}}
    {{--<span class="input-group-btn">--}}
    {{--<button class="btn btn-outline-secondary" type="button">--}}
    {{--<i class="fa fa-search fa-1x"></i>--}}
    {{--</button>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--<label class="col-md-1 ml-3">--}}
    {{--<input class="field mx-1" name="filters[]" type="checkbox" value="{{$filters = 'lastname' }}">Nom--}}
    {{--</label>--}}
    {{--<label class="col-md-1">--}}
    {{--<input class="field mx-1" name="filters[]" type="checkbox" value="{{$filters = 'email' }}">Email--}}
    {{--</label>--}}
    {{--<label class="col-md-1">--}}
    {{--<input class="field mx-1" name="filters[]" type="checkbox" value="{{$filters = 'roles.name' }}">Rôle--}}
    {{--</label>--}}
    {{--<label>--}}
    {{--<input class="field mx-1" name="filters[]" type="checkbox" value="{{$filters = 'groups.name' }}">Groupe--}}
    {{--</label>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<form action="{{ route('users.destroy') }}" method="post">--}}
    {{--{{ csrf_field() }}--}}
    {{--<div class="row justify-content-end mt-2">--}}
    {{--<button class="submit" type="submit"><a><i class="fa fa-trash fa-2x " aria-hidden="true" ><input type="hidden" name="_method" value="delete"></i></a></button>--}}
    {{--<a href="{{ action('Back\UserController@create') }}"><i class="fa fa-user-plus fa-2x col-1 mr-4" aria-hidden="true"></i></a>--}}
    {{--</div>--}}
    <div class="justify-content-center md-10 column-table">
    <table class="table table-hover mt-3">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Email</th>
            <th scope="col">Rôle</th>
            <th scope="col">Groupe</th>
            <th scope="col">Projet</th>
            <th style="width: 9px;">
                <input type="checkbox" class="group-checkable"  data-set="#sample_1 .checkboxes" />
            </th>
        </tr>
        </thead>
        {{--<form>--}}
        @foreach($users as $user)
            <tr class="odd gradeX">
                <td><a class="link-color" href="{{ route('users.edit', $user->id) }}">{{ $user->lastname }}</a></td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->group }}</td>
                <td>{{ $user->project }}</td>
                <td>
                    <input type="checkbox" class="checkbox mr-3" name="users[]" value="{{ $user->id }}" />
                </td>
            </tr>
            @endforeach
            </form>
            </tbody>
    </table>
    </div>
    <div class="row justify-content-center">
        {{ $users->links('layouts.pagination') }}
    </div>


@endsection