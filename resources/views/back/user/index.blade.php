@extends('layouts.template')
@extends('layouts.breadcrumb')
@extends('layouts.navbar')
@section('content')
    <div class="text-center user-title my-4">
        <h2>@lang('user.user_management')</h2>
    </div>
    <div class="row md-12  mx-0 px-0 justify-content-between">
        <div class="col-lg-4 col-md-6 ">
            <form action="{{ action('Back\UserController@index') }}" method="GET" role="search" >
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search my-1"></i>
        </button>
                    </span>
                </div>
            </form>
        </div>
        <div class="col-md-1 pl-4">
            <a href="{{ action('Back\UserController@create') }}"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>
    <form action="{{ action('Back\UserController@destroy') }}" method="post">
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
                    <th>
                        <input type="checkbox" class="js-group-checkable" />
                    </th>
                    <th>
                        <a>
                            <button class="trash" type="submit">
                                <i class="fa fa-trash fa-2x mt-auto" aria-hidden="true">
                                    {{ method_field('DELETE') }}
                                </i>
                            </button>
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="odd gradeX">
                        <td><a class="link-color" href="{{ action('Back\UserController@edit', $user->id) }}">{{ $user->lastname }}</a></td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->group }}</td>
                        <td>{{ $user->project }}</td>
                        <td>
                            <input type="checkbox" class="js-checkbox-selected" name="users[]" value="{{ $user->id }}" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </form>
    <div class="row justify-content-center px-0 mx-0">
        {{ $users->links('layouts.pagination') }}
    </div>

@endsection