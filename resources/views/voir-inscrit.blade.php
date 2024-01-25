@extends('base_voir')


@section('content')
<div class="body hidden">
<div class="container">
    <Header>Visionnage d'un suivi</Header>
    <header>{{$inscrit->prenom}} {{$inscrit->nom}}</header>
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
@endsection
