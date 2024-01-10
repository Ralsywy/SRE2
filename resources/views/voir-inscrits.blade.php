@extends('base')


@section('content')
<h1>Voir les inscrits</h1>
@foreach($inscrits as $ligne)
    {{$ligne->nom}} {{$ligne->prenom}} {{$ligne->capEmploi->nom_ref}}
@endforeach
@endsection