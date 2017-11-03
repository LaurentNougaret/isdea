@extends('layouts.template')
@extends('layouts.navbar')
@section('content')
    <div class="row">
        <div class="card mx-auto my-5 col-lg-6 col-md-9 border border-primary rounded">
            <h1 class="mx-auto pt-3 card.header">Compte utilisateur</h1>
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
                <form method="POST" action="{{ action('Back\UserController@store') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                        <div class="mx-auto col-md-9">
                            <label for="firstname" class="col-form-label">Prénom</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></div>
                            <input id="firstname" type="text" placeholder="John" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>
                            @if ($errors->has('firstname'))
                                <span class="form-text">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <div class="mx-auto col-md-9">
                            <label for="lastname" class="col-form-label">Nom</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></div>
                            <input id="lastname" type="text" placeholder="Snow" class="form-control" name="lastname" value="{{ old('lastname') }}" required>
                            @if ($errors->has('lastname'))
                                <span class="form-text">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="mx-auto col-md-9">
                            <label for="email" class="col-form-label">Email</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-at fa-fw" aria-hidden="true"></i></div>
                            <input id="email" type="text" placeholder="johnsnow@got.com" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="form-text">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                        <div class="mx-auto col-md-9">
                            <label for="role_id" class="col-form-label">Rôle</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-vcard-o fa-fw" aria-hidden="true"></i></div>
                            <select id="role_id" class="form-control" name="role_id" required>
                                <option selected>Sélectionner le rôle</option>
                                @foreach($roles as $role)
                                    {{ dump($role) }}
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('language_id') ? ' has-error' : '' }}">
                        <div class="mx-auto col-md-9">
                            <label for="language_id" class="col-form-label">Langue</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-language fa-fw" aria-hidden="true"></i></div>
                            <select id="language_id" class="form-control" name="language_id" required>
                                <option selected>Sélectionner la langue de saisie</option>
                                @foreach($languages as $language)
                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('group_id') ? ' has-error' : '' }}">
                        <div class="mx-auto col-md-9">
                            <label for="group_id" class="col-form-label">Groupe</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-users fa-fw" aria-hidden="true"></i></div>
                            <select id="group_id" class="form-control" name="group_id" required>
                                <option selected>Sélectionner le groupe</option>
                                @foreach ($groups as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row col-md-12 m-0">
                        <button type="submit" class="btn-lg btn-outline-primary font-weight-bold mx-auto">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
