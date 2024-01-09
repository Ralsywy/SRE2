@extends('base')
@section('content')
<div class="page-acc">
    <section id="creer-acc">
        <h1>Créer un accompagnateur</h1>
        <form action="">
            <div class="input-box">
                <label for="nom">NOM Prénom</label>
                <input type="text" id="nom_acc" placeholder="NOM Prénom de l'accompagnateur">
            </div>
            <div class="input-box">
                <label for="mdp">Mot de passe</label>
                <input type="text" id="mdp_acc" placeholder="Mot de passe">
            </div>
            <div class="input-box">
                <button type="submit" class="btn_creer">Créer</button>
            </div>
        </form>
    </section>
</div>
@endsection