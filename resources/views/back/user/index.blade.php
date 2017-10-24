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
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>
@endsection