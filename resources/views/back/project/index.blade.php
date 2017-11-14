@extends('layouts.template')
@extends('layouts.navbar')
@section('content')

    {{ dump($projects) }}

    <div class="text-center mb-5">
        <h2>@lang('user.project')</h2>
    </div>

    <div class="form-row align-items-center bg-success">

        {{--justify-content-between mx-0 px-0--}}
        {{--<div class="col-lg-4 col-md-6 ">--}}
            <form action="{{action('Back\ProjectController@index')}}" method="GET" role="search">
                {{--class="navbar-form navbar-left"--}}
                <div class="input-group">
                    {{--custom-search-form--}}
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>

        <div class="col-auto">
            <label class="sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group mb-2 mb-sm-0">
                <div class="input-group-search"><i class="fa fa-search"></i></div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
            </div>
        </div>



        <div class="col-md-1 pl-4">
            <a href="{{ action('Back\UserController@create') }}"><i class="fa fa-user-plus fa-2x create" aria-hidden="true"></i></a>
        </div>

    </div>





    <form action="{{ route('users.destroy') }}" method="post">
        {{ csrf_field() }}
        <div class="justify-content-center md-12 column-table px-0 mr-0">
            <table class="table table-hover mt-3">
                <thead>
                <tr>
                    <th scope="col">@lang('user.lastname')</th>
                    <th scope="col">@lang('user.firstname')</th>
                    <th scope="col">@lang('user.email')</th>
                    <th scope="col">@lang('user.role')</th>
                    <th scope="col">@lang('user.group')</th>
                    <th scope="col">@lang('user.project')</th>
                    <th style="width: 9px;">
                        <input type="checkbox" class="group-checkable"  data-set="#sample_1 .checkboxes" />
                    </th>
                    <th><a><button class="trash" type="submit"><i class="fa fa-trash fa-2x mt-auto" aria-hidden="true">
                                    <input type="hidden" name="_method" value="delete"></i></button></a></th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach($users as $user)--}}
                {{--<tr class="odd gradeX">--}}
                {{--<td><a class="link-color" href="{{ route('users.edit', $user->id) }}">{{ $user->lastname }}</a></td>--}}
                {{--<td>{{ $user->firstname }}</td>--}}
                {{--<td>{{ $user->email }}</td>--}}
                {{--<td>{{ $user->role }}</td>--}}
                {{--<td>{{ $user->group }}</td>--}}
                {{--<td>{{ $user->project }}</td>--}}
                {{--<td>--}}
                {{--<input type="checkbox" class="checkbox" name="users[]" value="{{ $user->id }}" />--}}
                {{--</td>--}}
                {{--</tr>--}}
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
    </form>
    {{--<div class="row justify-content-center px-0 mx-0">--}}
    {{--{{ $users->links('layouts.pagination') }}--}}
    {{--</div>--}}






@endsection