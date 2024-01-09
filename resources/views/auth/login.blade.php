@extends('base')

@section('content')
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />

    <div class="wrapper">
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
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
            <button type="submit" class="btn">
                Se connecter
            </button>
        </div>
    </form>
</div>
</x-guest-layout>
@endsection