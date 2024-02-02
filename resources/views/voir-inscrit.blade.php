@extends('base_voir')


@section('content')
<div class="body hidden">
<div class="container">
    <header>Suivi de {{$inscrit->prenom}} {{$inscrit->nom}}</header>
    <a class="print" href="#" onclick="window.print(); return false;"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19 7h-1V2H6v5H5a3 3 0 0 0-3 3v7a2 2 0 0 0 2 2h2v3h12v-3h2a2 2 0 0 0 2-2v-7a3 3 0 0 0-3-3zM8 4h8v3H8V4zm0 16v-4h8v4H8zm11-8h-4v-2h4v2z"></path></svg></a>
    <p class="print" data-tooltip-content="https://i.ibb.co/wgjsF7z/image-2024-02-01-113057067.png">(Lors de l'impression mettre la mise en page au format paysage)</p>

    <hr class="dashed">
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
        <div class="label"><strong>Inscrit à CAP emploi</strong></div>
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
                <div class="label"><strong>Date d'inscription à CAP emploi</strong></div>
                <p>{{$inscrit->capEmploi?->dte_inscription}}</p>
            </div>
            <div class="field">
                <div class="label"><strong>Référent à CAP emploi</strong></div>
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
        @if ($inscrit->permis && $inscrit->permis->isNotEmpty())
        @foreach ($inscrit->permis as $permis)
            @if ($permis->autre)
                <div class="field">
                    <div class="label"><strong>Autres permis</strong></div>
                    <p>{{ $permis->autre }}</p>
                </div>
            @endif
        @endforeach
    @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Véhicule disponible</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->vehicule_dispo == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
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
    @if ($inscrit->vehicule_dispo == 1)
    <div class="field">
        <div class="label"><strong>Achat prévu</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->prevu_vehicule == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
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
    @endif
    @if ($inscrit->prevu_vehicule == 1)
    <div class="field">
        <div class="label"><strong>Date d'achat</strong></div>
        <p>{{$inscrit->dte_achat}}</p>
    </div>
    @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <header class="underline">Formations</header>
    </div>
</div>
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Diplôme(s) obtenu(s)</strong></div>
        @if ($inscrit->nb_diplome == 0 || $inscrit->nb_diplome === null)
            <p>0</p>
        @else
            <p>{{$inscrit->nb_diplome}}</p>
        @endif
    </div>
</div>
<div class="jaaj">
    <div class="field">
        @if ($inscrit->nb_diplome > 0)
        @foreach ($inscrit->diplomes as $ligne)
            <div class="field">
                <div class="label"><strong>Type de diplôme</strong></div>
                <p>{{ $ligne->type }}</p>
            </div>
    
            @if ($ligne->specialite != null)
                <div class="field">
                    <div class="label"><strong>Spécialité/métier</strong></div>
                    <p>{{ $ligne->specialite }}</p>
                </div>
            @endif
        @endforeach
    @else
        <div class="field">
            <div class="label"><strong>Type de diplôme</strong></div>
            <p>0</p>
        </div>
    @endif
    
    </div>
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Reconversion professionnelle</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_reconv_pro == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
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
        <div class="label"><strong>Formations prévues</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->reconvPro && $inscrit->reconvPro->is_form_prevue == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
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
        @if ($inscrit->reconvPro && $inscrit->reconvPro->is_form_prevue == 1)
            <div class="field">
                <div class="label"><strong>Nom</strong></div>
                <p>{{$inscrit->reconvPro?->nom}}</p>
            </div>
            <div class="field">
                <div class="label"><strong>Date</strong></div>
                <p>{{$inscrit->reconvPro?->date}}</p>
            </div>
            <div class="field">
                <div class="label"><strong>Durée</strong></div>
                <p>{{$inscrit->reconvPro?->duree}}</p>
            </div>
        @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Reprise d'étude</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_reprise_etudes == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
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
    @if ($inscrit->is_reprise_etudes == 1)
        <div class="field">
            <div class="label"><strong>Diplôme préparé</strong></div>
            <p>{{$inscrit->repriseEtude?->nom_diplome}}</p>
        </div>
    @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>La personne va-t-elle bénéficier d'une formation professionnelle</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_formation_pro == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
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
        <div class="label"><strong>Type de formation</strong></div>
        <p>{{$inscrit->formationPro?->type}}</p>
    </div>
    @if ($inscrit->formationPro?->type == "qualifiante")
        <div class="field">
            <div class="label"><strong>Nom de la formation qualifiante</strong></div>
            <p>{{$inscrit->formationPro?->nom}}</p>
        </div>
    @elseif ($inscrit->formationPro?->type == "diplomante")
        <div class="field">
            <div class="label"><strong>Nom de la formation diplômante</strong></div>
            <p>{{$inscrit->formationPro?->nom}}</p>
        </div>
    @else
    @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Métié souhaité</strong></div>
        <p>{{$inscrit->metierSouhaite?->nom}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>Secteur d'activité</strong></div>
        <p>{{$inscrit->metierSouhaite?->secteur_act}}</p>
    </div>
    <div class="field">
        <div class="label"><strong>Secteur géographique</strong></div>
        <p>{{$inscrit->metierSouhaite?->secteur_geo}}</p>
    </div>
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Connaissance en bureautique ou logiciels</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->is_logiciel == 1) @checked(true) @else @checked(false) @endif @disabled(true)>
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
        <div class="label"><strong>Connaissance(s)</strong></div>
        <p>{{$inscrit->logiciel}}</p>
    </div>
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Horaire(s) de travail souhaité</strong></div>
        @foreach ($inscrit->horaires as $ligne)
        <p>{{$ligne->type}},</p>
        @endforeach
    </div>
</div>
<hr class="dashed">
<div class="jaaj"><p>0 -> 6 | du niveau le plus faible au plus élevé (corresponds au niveau de langue CECRL)</p></div>
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Inscrit aux ateliers de français</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->langue->contains('is_atelier', 1)) @checked(true) @else @checked(false) @endif @disabled(true)>
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
        <div class="label"><strong>Connaissance en français écrit</strong></div>
        @if ($inscrit->langue->isNotEmpty())
        @foreach ($inscrit->langue as $item)
            <p>{{ $item->fr_ecrit }}</p>
        @endforeach
    @endif    
    </div>
    <div class="field">
        <div class="label"><strong>Connaissance en français parlé</strong></div>
        @if ($inscrit->langue->isNotEmpty())
        @foreach ($inscrit->langue as $item)
            <p>{{ $item->fr_parle }}</p>
        @endforeach
    @endif    
    </div>
    <div class="field">
        <div class="label"><strong>Connaissance en français lu</strong></div>
        @if ($inscrit->langue->isNotEmpty())
        @foreach ($inscrit->langue as $item)
            <p>{{ $item->fr_lu }}</p>
        @endforeach
    @endif    
    </div>
    <div class="field">
        <div class="label"><strong>Connaissance en anglais écrit</strong></div>
        @if ($inscrit->langue->isNotEmpty())
        @foreach ($inscrit->langue as $item)
            <p>{{ $item->en_ecrit }}</p>
        @endforeach
    @endif    
    </div>
    <div class="field">
        <div class="label"><strong>Connaissance en anglais parlé</strong></div>
        @if ($inscrit->langue->isNotEmpty())
        @foreach ($inscrit->langue as $item)
            <p>{{ $item->en_parle }}</p>
        @endforeach
    @endif    
    </div>
    <div class="field">
        <div class="label"><strong>Connaissance en anglais lu</strong></div>
        @if ($inscrit->langue->isNotEmpty())
        @foreach ($inscrit->langue as $item)
            <p>{{ $item->en_lu }}</p>
        @endforeach
    @endif    
    </div>
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Autre(s) langue(s) parlée(s)</strong></div>
        <label class="switch">
            <input type="checkbox" @if ($inscrit->langue->contains('is_autre', 1)) @checked(true) @else @checked(false) @endif @disabled(true)>
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
    @if ($inscrit->langue->contains('is_autre', 1))
    <div class="field">
        <div class="label"><strong>Langue(s)</strong></div>
        <p>{{ optional($inscrit->langue->first())->autre }}</p>
    </div>        
    @endif
</div>
<hr class="dashed">
<div class="jaaj">
    <div class="field">
        <div class="label"><strong>Informations complémentaires</strong></div>
        <p>{{$inscrit->infos_comp}}</p>
    </div>
</div>
@endsection
