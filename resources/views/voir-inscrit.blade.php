@extends('base_voir')


@section('content')
<div class="body hidden">
<div class="container">
    <header>Suivi de {{$inscrit->prenom}} {{$inscrit->nom}}</header>
<div class="form-outer">
</div>
<div class="jaaj">
<div class="field">
    <div class="label"><strong>Date du contact</strong></div>
    <p class="dte_contact">{{$inscrit->dte_contact}}</p>
</div>
<div class="field">
    <div class="label"><strong>Bénévole aux restos du coeur</strong></div>
    <label class="switch">
        <input type="checkbox" @if ($inscrit->is_benevole == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
        <div class="slider">
            <div class="circle">
                <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                    </g>
                </svg>
                <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                    </g>
                </svg>
            </div>
        </div>
    </label>
</div>
<div class="field">
    <div class="label"><strong>Inscrit aux restos du coeur</strong></div>
    <label class="switch">
        <input type="checkbox" @if ($inscrit->is_rdc == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
        <div class="slider">
            <div class="circle">
                <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                    </g>
                </svg>
                <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                    </g>
                </svg>
            </div>
        </div>
    </label>
</div>
@if ($inscrit->is_rdc == 1)
<div class="field">
    <div class="label"><strong>N°</strong></div>
    <p class="rdc_num">{{$inscrit->rdc?->numero}}</p>
</div>
<div class="field">
    <div class="label"><strong>Centre</strong></div>
    <p class="rdc_centre">{{$inscrit->rdc?->centre}}</p>
</div>
<div class="field">
    <div class="label"><strong>Jour</strong></div>
    <p class="rdc_jour">{{$inscrit->rdc?->jour}}</p>
</div>
@else
@endif
</div>
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Nom</strong></div>
        <p class="nom">{{$inscrit->nom}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>Prénom</strong></div>
        <p class="nom">{{$inscrit->prenom}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>Accompagnateur</strong></div>
        <p class="accompagnateur">{{$inscrit->user?->name}}</p>
    </div>
</div>
<div class="jaaj">
    <div class="field">
        <h3 class="underline"><strong>Coordonnées</strong></h3>
    </div>
</div>
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Civilité</strong></div>
        <p class="civilite">{{$inscrit->civilite}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>Date de naissance</strong></div>
        <p class="date_de_naissance">{{$inscrit->dte_naissance}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>Nationalité</strong></div>
        <p class="nationalirte">{{$inscrit->nationalite}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>Adresse</strong></div>
        <p class="adresse">{{$inscrit->adresse}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>Code Postal</strong></div>
        <p class="postal">{{$inscrit->code_postal}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>Ville</strong></div>
        <p class="ville">{{$inscrit->ville}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>Téléphone</strong></div>
        <p class="tel">{{$inscrit->telephone}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>E-mail</strong></div>
        <p class="mail">{{$inscrit->email}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>Situation personnelle</strong></div>
        <p class="sirtuaperso">{{$inscrit->situation_perso}}</p>
    </div>
</div>
<div class="jaaj">
    <div class="field">
        <h3 class="underline"><strong>Situation personnelle</strong></h3>
    </div>
</div>
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Enfant à charge</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_enfant == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
            <div class="slider">
                <div class="circle">
                    <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                        </g>
                    </svg>
                    <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </label>
    </div>
@if ($inscrit->is_enfant == 1)
<div class="field">
    <div class="label"><strong>Nombre d'enfant</strong></div>
    <p class="pnb_enfant">{{$inscrit->nb_enfant}}</p>
</div>
@else
@endif
</div>
@foreach ($inscrit->enfants as $ligne)
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Nom</strong></div>
        <p class="nom_enfant">{{$ligne->nom}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>Date de naissance</strong></div>
        <p class="nom_enfant">{{$ligne->dte_naissance}}</p>
    </div>
</div>
@endforeach
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Nature des revenus</strong></div>
        @if ($inscrit->nature_revenus == "autre")
            <p>{{$inscrit->autre_revenus}}</p>
        @else
            <p>{{$inscrit->nature_revenus}}</p>
        @endif
    </div>
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Demandeur d'asile</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_demande_asile == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
            <div class="slider">
                <div class="circle">
                    <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                        </g>
                    </svg>
                    <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </label>       
    </div>
    @if ($inscrit->is_demande_asile == 1)
        <div class="field">
            <div class="label"><strong>Date d'arrivée en france</strong></div>
            <p>{{$inscrit->dte_arrivee_fr}}</p>
        </div>
    @endif
    <div class="field">
        <div class="label"><strong>Réfugié politique</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_refugie_politique == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
            <div class="slider">
                <div class="circle">
                    <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                        </g>
                    </svg>
                    <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </label>       
    </div>
    @if ($inscrit->is_refugie_politique == 1)
        <div class="field">
            <div class="label"><strong>Date d'arrivée en france</strong></div>
            <p>{{$inscrit->dte_arrivee_fr}}</p>
        </div>
    @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Inscrit à France travail</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_france_travail == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
            <div class="slider">
                <div class="circle">
                    <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                        </g>
                    </svg>
                    <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </label>
    </div>
        @if ($inscrit->is_france_travail == 1)
            <div class="field">
                <div class="label"><strong>Date d'inscription à France travail</strong></div>
                <p>{{$inscrit->franceTravail?->dte_inscription}}</p>
            </div>
            <div class="field">
                <div class="label"><strong>Référent à France travail</strong></div>
                <p>{{$inscrit->franceTravail?->nom_ref}}</p>
            </div>
        @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Inscrit à Soélis</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_soelis == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
            <div class="slider">
                <div class="circle">
                    <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                        </g>
                    </svg>
                    <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </label>
    </div>
        @if ($inscrit->is_soelis == 1)
            <div class="field">
                <div class="label"><strong>Date d'inscription à Soélis</strong></div>
                <p>{{$inscrit->soelis?->dte_inscription}}</p>
            </div>
            <div class="field">
                <div class="label"><strong>Référent à Soélis</strong></div>
                <p>{{$inscrit->soelis?->nom_ref}}</p>
            </div>
        @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Inscrit à la chambre des métiers et de l'artisanat</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_cma == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
            <div class="slider">
                <div class="circle">
                    <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                        </g>
                    </svg>
                    <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </label>
    </div>
        @if ($inscrit->is_cma == 1)
            <div class="field">
                <div class="label"><strong>Date d'inscription à CMA</strong></div>
                <p>{{$inscrit->cma?->dte_inscription}}</p>
            </div>
            <div class="field">
                <div class="label"><strong>Référent à CMA</strong></div>
                <p>{{$inscrit->cma?->nom_ref}}</p>
            </div>
        @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Inscrit à la Mission locale</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_mission_locale == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
            <div class="slider">
                <div class="circle">
                    <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                        </g>
                    </svg>
                    <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </label>
    </div>
        @if ($inscrit->is_mission_locale == 1)
            <div class="field">
                <div class="label"><strong>Date d'inscription à la Mission locale</strong></div>
                <p>{{$inscrit->missionLocale?->dte_inscription}}</p>
            </div>
            <div class="field">
                <div class="label"><strong>Référent à la Mission locale</strong></div>
                <p>{{$inscrit->missionLocale?->nom_ref}}</p>
            </div>
        @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Inscrit à CAP emplois</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_cap_emploi == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
            <div class="slider">
                <div class="circle">
                    <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                        </g>
                    </svg>
                    <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </label>
    </div>
        @if ($inscrit->is_cap_emploi == 1)
            <div class="field">
                <div class="label"><strong>Date d'inscription à CAP emplois</strong></div>
                <p>{{$inscrit->capEmploi?->dte_inscription}}</p>
            </div>
            <div class="field">
                <div class="label"><strong>Référent à CAP emplois</strong></div>
                <p>{{$inscrit->capEmploi?->nom_ref}}</p>
            </div>
        @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>CV disponible</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_cv == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
            <div class="slider">
                <div class="circle">
                    <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                        </g>
                    </svg>
                    <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </label>
    </div>
        @if ($inscrit->is_cv == 0)
            <div class="field">
                <div class="label"><strong>Date programmé pour travailler le CV</strong></div>
                <p>{{$inscrit->cv?->dte_travailler}}</p>
            </div>
        @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>A le permis</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_permis == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
            <div class="slider">
                <div class="circle">
                    <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                        </g>
                    </svg>
                    <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </label>
    </div>
        @if ($inscrit->is_permis == 1)
            <div class="field">
                <div class="label"><strong>Type de permis</strong></div>
                @foreach ($inscrit->permis as $permis)
                <p>{{ $permis->type ?? '' }}</p>
            @endforeach
            
            </div>
            <div class="field">
                <div class="label"><strong>Catégorie du permis</strong></div>
                @foreach ($inscrit->permis as $permis)
                <p>{{ $permis->categorie ?? '' }}</p>
            @endforeach
            
            </div>
        @endif
</div>
@endsection
