@extends('base')
@section('content')
<div class="page-acc">
    <div class="creer-acc">
        <h1>Créer un accompagnateur</h1>
        <form method="POST" action="{{ route('register-acc') }}">
            @csrf
            <div class="input-box">
                <input type="text" id="name" type="text" name="name" placeholder="NOM Prénom">
            </div>
            <div class="input-box">
                <input id="password" type="password" name="password" placeholder="Mot de passe">
            </div>
            <div class="input-box">
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirmer mot de passe">
            </div>
            <div class="input-box">
                <button type="submit" class="btn_creer">Créer</button>
            </div>
        </form>
    </div>
</div>
@endsection