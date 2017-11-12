@extends('layouts.template')
@extends('layouts.navbar')
@section('content')
    <div class="row justify-content-center mt-5">
        <h2>@lang('main.home')</h2>
    </div>
    <div class="row">
        <div class="card rounded mx-auto col-lg-6 col-md-9 p-0 mt-5">
            <a class="btn btn-success" href="{{ action('Back\UserController@index') }}" target="_blank" role="button">
                <div class="row">
                    <div class="my-auto col-lg-4"><i class="icon fa fa-users fa-3x fa-fw" aria-hidden="true"></i></div>
                    <div class="mx-auto col-lg-8 py-5"><h2 class="card-title text-deco">@lang('main.users_button')</h2></div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="card rounded mx-auto col-lg-6 col-md-9 p-0 mt-5">
            <a class="btn btn-warning" href="https://trello.com/b/dkjDhmfP/isdea" target="_blank" role="button">
                <div class="row">
                    <div class="my-auto col-lg-4"><i class="icon fa fa-rocket fa-3x fa-fw" aria-hidden="true"></i></div>
                    <div class="mx-auto col-lg-8 py-5"><h2 class="card-title text-deco">@lang('main.projects_button')</h2></div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="card rounded mx-auto col-lg-6 col-md-9 p-0 mt-5">
            <a class="btn btn-info" href="https://trello.com/b/dkjDhmfP/isdea" target="_blank" role="button">
                <div class="row">
                    <div class="my-auto col-lg-4"><i class="icon fa fa-tachometer fa-3x fa-fw" aria-hidden="true"></i></div>
                    <div class="mx-auto col-lg-8 py-5"><h2 class="card-title text-deco">@lang('main.statistics_button')</h2></div>
                </div>
            </a>
        </div>
    </div>
@endsection
