<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/f3ca3e43e8.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <title>SRE</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>
      @auth
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://logovectordl.com/wp-content/uploads/2020/09/les-restos-du-coeur-logo-vector.png" alt="RDC" height="50">
          </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              
              <li class="nav-item">
                <a class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">Accueil</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Liste des inscrits
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('voir-inscrits') }}">En cours</a></li>
                  <li><a class="dropdown-item" href="{{ route('voir-inscrits-term') }}">Terminés</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->is('creer-inscrit')) ? 'active' : '' }}" href="{{ route('creer-inscrit') }}">Créer un inscrit</a>
              </li>
              @if(auth()->user()->is_admin == 1)
              <li class="nav-item">
                <a class="nav-link {{ (request()->is('voir-acc')) ? 'active' : '' }}" href="{{ route('voir-acc') }}">Gérer les accompagnateurs</a>
              </li>
              <li>
              @endif
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" class="nav-link"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </x-dropdown-link>
                </form>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      @endauth
      @if(Session::has('success'))
      <div class="alert alert-primary" role="alert">
        {{Session::get('success')}}
      </div>
      @endif

      @if ($errors->any())
      <div class="alert alert-warning" role="alert">
        Erreur(s):
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </div>
      @endif
      @yield('content')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="{{asset('javascript/script.js')}}"></script>
    </body>
</html>
