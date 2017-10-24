@extends('layouts.template')
@extends('layouts.navBar')
@section('content')
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Rôle</th>
        <th scope="col">Groupe</th>
        <th scope="col">Projet</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
    </tr>
    </tbody>
</table>
@endsection