@extends('layouts.template')
@extends('layouts.navbar')
@section('content')
<div class="login">
    <div class="row-fluid background">
        <img id="logo" class="d-block mx-auto" src="/storage/images/isdea.png" alt="isdea_logo">
        <div class="card mx-auto col-lg-6 col-md-9 border border-danger rounded" >
            <h2 class="mx-auto pt-3">@lang('auth.login')</h2>
            <div class="card-body p-0">
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
                    <div class="form-group mb-0">
                        <div class="col-md-9 mx-auto px-0">
                            <label for="password" class="col-md-6 col-form-label">@lang('auth.password')</label>
                        </div>
                        <div class="col-md-9 mx-auto">
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mx-auto">
                            <div class="col-md-9 mx-auto">
                                <button type="submit" class="btn btn-secondary mx-auto shadow-button mt-3">
                                    @lang('auth.login')
                                </button>
                            </div>
                            <div class="col-md-12 mt-3">
                                <a href="{{ action('Auth\ForgotPasswordController@showLinkRequestForm') }}">
                                    @lang('auth.forgot')
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
