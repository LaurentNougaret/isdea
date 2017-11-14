@extends('layouts.template')
@extends('layouts.navbar')
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="card border border-danger rounded col-md-8 col-md-offset-2 mx-auto">
                <h2 class="mx-auto my-4">@lang('passwords.reset_password')</h2>
                <div class="card-body d-flex justify-content-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger col-md-8 my-3">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                    <form method="POST" action="{{ action('Auth\ForgotPasswordController@sendResetLinkEmail') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" class="col-md-12 col-form-label">@lang('user.email')</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-outline-secondary shadow-button">@lang('passwords.send_password')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
