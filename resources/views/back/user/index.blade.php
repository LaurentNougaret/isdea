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
            <th scope="col">Suppression</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>BRASSENS</td>
            <td>Georges</td>
            <td>SUperman</td>
            <td>La fine équipe</td>
            <td>Le Gorille</td>
            <td></td>
        </tr>
        </tbody>
    </table>
@endsection