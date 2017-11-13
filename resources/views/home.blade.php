@extends('layouts.template')
@extends('layouts.navbar')
@section('content')
    <div class="row justify-content-center mt-5">
        <h2>@lang('home.home')</h2>
    </div>
    <div class="row">
        <div class="card rounded mx-auto col-lg-6 col-md-9 p-0 mt-5">
            @if(Auth::user() && Auth::user()->role->name == "Administrator" || Auth::user()->role->name == "Supervisor")
                <a class="btn btn-success" href="{{ action('Back\UserController@index') }}" target="_blank" role="button">
                    <div class="row">
                        <div class="my-auto col-lg-4"><i class="icon fa fa-users fa-3x fa-fw" aria-hidden="true"></i></div>
                        <div class="mx-auto col-lg-8 py-5"><h2 class="card-title text-deco">@lang('home.users_button')</h2></div>
                    </div>
                </a>
            @else
                <a class="btn btn-success" href="{{ action('Front\UserController@profile') }}" target="_blank" role="button">
                    <div class="row">
                        <div class="my-auto col-lg-4"><i class="icon fa fa-user fa-3x fa-fw" aria-hidden="true"></i></div>
                        <div class="mx-auto col-lg-8 py-5"><h2 class="card-title text-deco">@lang('home.profile_button')</h2></div>
                    </div>
                </a>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="card rounded mx-auto col-lg-6 col-md-9 p-0 mt-5">
            <a class="btn btn-warning" href="https://trello.com/b/dkjDhmfP/isdea" target="_blank" role="button">
                <div class="row">
                    <div class="my-auto col-lg-4"><i class="icon fa fa-rocket fa-3x fa-fw" aria-hidden="true"></i></div>
                    <div class="mx-auto col-lg-8 py-5"><h2 class="card-title text-deco">@lang('home.projects_button')</h2></div>
                </div>
            </a>
        </div>
    </div>
    @if(Auth::user() && Auth::user()->role->name == "Administrator")
        <div class="row">
            <div class="card rounded mx-auto col-lg-6 col-md-9 p-0 mt-5">

                <a class="btn btn-info" href="https://trello.com/b/dkjDhmfP/isdea" target="_blank" role="button">
                    <div class="row">
                        <div class="my-auto col-lg-4"><i class="icon fa fa-tachometer fa-3x fa-fw" aria-hidden="true"></i></div>
                        <div class="mx-auto col-lg-8 py-5"><h2 class="card-title text-deco">@lang('home.statistics_button')</h2></div>
                    </div>
                </a>
            </div>
        </div>
    @endif
@endsection
