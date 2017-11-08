@extends('layouts.template')
@extends('layouts.navbar')
@section('content')
    <h1 class="text-center my-5">ISDEA</h1>
    <div class="row">
        <div class="card mx-auto my-4 col-lg-6 col-md-9 border border-danger rounded" >
            <h2 class="card-header mx-auto pt-3">@lang('auth.login')</h2>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger col-md-8 my-3">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
                <form method="POST" action="{{ action('Auth\LoginController@showLoginForm') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-9 mx-auto">
                            <label for="email" class="col-form-label">@lang('auth.email')</label>
                        </div>
                        <div class="col-md-9 mx-auto">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 mx-auto px-0">
                            <label for="password" class="col-md-6 col-form-label">@lang('auth.password')</label>
                        </div>
                        <div class="col-md-9 mx-auto">
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-xs-12 mx-auto">
                            <button type="submit" class="btn btn-outline-secondary btn-sm">
                                @lang('auth.login')
                            </button>
                            <a class="px-3 col-xs-12 mx-auto" href="{{ route('password.request') }}">
                                @lang('auth.forgot')
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
