@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="card mx-auto my-5 col-md-6 offset-md-3 border border-primary rounded">
            <h1 class="mx-auto pt-3 card.header">Compte utilisateur</h1>

            <div class="card-body">
                <form method="POST" action="{{ route('users.store') }}">
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
                            <input id="lastname" type="text" placeholder="Doe" class="form-control" name="lastname" value="{{ old('lastname') }}" required>
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
                            <input id="email" type="text" placeholder="johndoe@gmail.com" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="form-text">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                        <div class="mx-auto col-md-9">
                            <label for="role" class="col-form-label">Rôle</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-vcard-o fa-fw" aria-hidden="true"></i></div>
                            <select id="role" class="form-control" name="role" value="{{ old('role') }}" required>
                                <option selected>Sélectionner le rôle</option>
                                <option value="1">Opérateur de saisie</option>
                                <option value="2">Opérateur de saisie supérieur</option>
                                <option value="3">Superviseur</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
                        <div class="mx-auto col-md-9">
                            <label for="language" class="col-form-label">Langue</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-language fa-fw" aria-hidden="true"></i></div>
                            <select id="language" class="form-control" name="language" value="{{ old('language') }}" required>
                                <option selected>Sélectionner la langue de saisie</option>
                                <option value="1">Anglais</option>
                                <option value="2">Français</option>
                                <option value="3">Espagnol</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('group_id') ? ' has-error' : '' }}">
                        <div class="mx-auto col-md-9">
                            <label for="group" class="col-form-label">Groupe</label>
                        </div>
                        <div class="input-group mx-auto col-md-9">
                            <div class="input-group-addon"><i class="fa fa-users fa-fw" aria-hidden="true"></i></div>
                            <select id="language" class="form-control" name="language" value="{{ old('group_id') }}" required>
                                <option selected>Sélectionner le groupe</option>
                                @foreach ($groups as $group)
                                    <option>{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row col-md-12 m-0">
                        <button type="submit" class="btn-lg btn-outline-primary font-weight-bold mx-auto" href="{{ route('users.store') }}">Valider</button>
                    </div>
                var_dump()
                </form>
            </div>
        </div>
    </div>
@endsection
