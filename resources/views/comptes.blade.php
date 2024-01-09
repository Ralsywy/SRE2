@extends('base')
@section('content')
<div class="page-acc">
    <div class="creer-acc">
        <h1>Créer un accompagnateur</h1>
        <form action="">
            <div class="input-box">
                <input type="text" id="nom_acc" placeholder="NOM Prénom">
            </div>
            <div class="input-box">
                <input type="text" id="mdp_acc" placeholder="Mot de passe">
            </div>
            <div class="input-box">
                <button type="submit" class="btn_creer">Créer</button>
            </div>
        </form>
    </div>
</div>
@endsection