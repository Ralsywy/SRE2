@extends('base')
@section('content')
<div class="page-acc">
    <div class="container hidden">
        <h1 class="hidden">Créer un accompagnateur</h1>
        <form method="POST" action="{{ route('register-acc') }}">
            @csrf
            <div class="input-box hidden">
                <input type="text" id="name" name="name" placeholder="NOM">
            </div>
            <div class="input-box hidden">
                <input type="text" id="prenom" name="prenom" placeholder="Prénom" oninput="capitalizeFirstLetter()">
            </div>
            <div class="input-box hidden">
                <input id="password" type="password" name="password" placeholder="Mot de passe">
            </div>
            <div class="input-box hidden">
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirmer mot de passe">
            </div>
            <div class="input-box hidden">
                <button type="submit" class="btn_creer">Créer</button>
            </div>
        </form>
    </div>
    <div class="container hidden">
        <h1 class="hidden">Liste des accompagnateurs</h1>
        @foreach($accompagnateurs as $ligne)
        <div class="un_acc hidden">
            <div class="box_list">
                <label class="nom_acc">{{$ligne->name}}</label>
            </div>
            <form method="post" action="{{ route('supp-acc',[$ligne->id])}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn_supp" onclick='return check_del()'>Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection