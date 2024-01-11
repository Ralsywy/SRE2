@extends('base')
@section('content')
<div class="page-inscrit">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Accompagnateur</th>
                <th>Nombre de rendez-vous</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inscrits as $ligne)
            <tr>
                <td>{{$ligne->nom}}</td>
                <td>{{$ligne->prenom}}</td>
                <td>{{$ligne->nom}}</td>
                <td>{{$ligne->nb_rdv}}</td>
                <td>{{$ligne->nom}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection