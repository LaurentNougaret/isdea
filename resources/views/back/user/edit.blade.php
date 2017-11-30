@extends('layouts.template')
@extends('layouts.breadcrumb')
@extends('layouts.navbar')
@section('content')
    <div class="row">
        <div class="card mx-auto mb-5 col-lg-6 col-md-9 border border-danger rounded">
            <h2 class="mx-auto pt-3">@lang('user.user account')</h2>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ action('Back\UserController@update', $user->id) }}">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="mx-auto col-md-9">
                            <label for="firstname" class="col-form-label">@lang('user.firstname')</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></div>
                            <input id="firstname" type="text" class="form-control" name="firstname" value="{{ $user->firstname }}" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mx-auto col-md-9">
                            <label for="lastname" class="col-form-label">@lang('user.lastname')</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></div>
                            <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $user->lastname }}" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mx-auto col-md-9">
                            <label for="email" class="col-form-label">@lang('user.email')</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-at fa-fw" aria-hidden="true"></i></div>
                            <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mx-auto col-md-9">
                            <label for="password" class="col-form-label">@lang('user.password')</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></div>
                            <input id="password" type="password" class="form-control" name="password" value="{{ $user->password }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mx-auto col-md-9">
                            <label for="password_confirmation" class="col-form-label">@lang('user.password_confirmation')</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-repeat fa-fw" aria-hidden="true"></i></div>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="{{ $user->password }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mx-auto col-md-9">
                            <label for="role_id" class="col-form-label">@lang('user.role')</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-vcard-o fa-fw" aria-hidden="true"></i></div>
                            <select id="role_id" class="form-control" name="role_id" required>
                                <option value="{{ $user->role_id }}" selected>{{ $user->saved_role }}</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mx-auto col-md-9">
                            <label for="language_id" class="col-form-label">@lang('user.language')</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-language fa-fw" aria-hidden="true"></i></div>
                            <select id="language_id" class="form-control" name="language_id" required>
                                <option value="{{ $user->language_id }}" selected>{{ $user->saved_language }}</option>
                                @foreach($languages as $language)
                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mx-auto col-md-9">
                            <label for="group_id" class="col-form-label">@lang('user.group')</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-users fa-fw" aria-hidden="true"></i></div>
                            <select id="group_id" class="form-control" name="group_id" required>
                                <option value="{{ $user->group_id }}" selected>{{ $user->saved_group }}</option>
                                @foreach ($groups as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row col-md-12 m-0">
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-secondary mx-auto shadow-button">@lang('user.validate')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
