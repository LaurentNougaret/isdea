@extends('layouts.template')
@extends('layouts.navbar')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-8 col-md-offset-2">
            <div class="card border border-danger rounded col-md-8 col-md-offset-2 mx-auto">
                <h2 class="mx-auto my-4">@lang('passwords.reset_password')</h2>
                <div class="card-body d-flex justify-content-center">
                    @if ($errors->any())
                        <div class="alert alert-danger col-md-8 my-3">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                    <form method="POST" action="{{ action('Auth\ForgotPasswordController@showLinkRequestForm') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <label for="email" class="col-md-4 col-form-label">@lang('user.email')</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label">@lang('user.password')</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label">@lang('user.password_confirmation')</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-outline-secondary shadow-button">@lang('passwords.reset_password')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
