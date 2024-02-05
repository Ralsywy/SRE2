@extends('base')

@section('content')
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />
    <div class="page-login">
        <div class="div_id">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Identifiant</strong> : Première lettre du prénom + nom complet, tout attaché et en minuscule. (EX : Jean-Luc Dubois = jdubois)
        </div>
        <div class="container hidden">
            <h1>Connexion</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- pseudo Address -->
                <div class="input-box">
                    <x-text-input id="pseudo" class="pseudo" name="pseudo" placeholder="Identifiant" :value="old('pseudo')" required autofocus autocomplete="pseudo"/>
                    <x-input-error :messages="$errors->get('pseudo')" class="" />
                        <i class="bx bxs-user"></i>
                </div>

                <!-- Password -->
                <div class="input-box">
                    <x-text-input id="password" class=""
                                    type="password"
                                    name="password" placeholder="Mot de passe"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="" />
                        <i class="bx bxs-lock-alt"></i>
                </div>


                    <button type="submit" class="btn_login">
                        Se connecter
                    </button>
                </div>
            </form>
        </div>
    </div>
    
        
@endsection