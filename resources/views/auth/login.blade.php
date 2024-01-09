@extends('base')

@section('content')
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />

    <div class="wrapper">
        <h1>Formulaire de connexion</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="input-box">
            <x-text-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="" />
                <i class="bx bxs-user"></i>
        </div>

        <!-- Password -->
        <div class="input-box">
            <x-text-input id="password" class=""
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="" />
                <i class="bx bxs-lock-alt"></i>
        </div>

        <!-- Remember Me -->
        <div class="remember-forgot">
            <label for="remember_me" class="">
                <input id="remember_me" type="checkbox" class="" name="remember">
                <span class="">Se souvenir</span>
            </label>
        </div>
            <button type="submit" class="btn1">
                Se connecter
            </button>
        </div>
    </form>
</div>
@endsection