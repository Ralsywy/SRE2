<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <title>SRE</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg" style="background-color: --primary;">
        <div class="container-fluid">
          <img src="img\rdc.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}"><strong>Accueil</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('show-inscrits') }}"><strong>Inscrits</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('show-comptes') }}"><strong>Comptes</strong></a>
              </li>
              <div class="logout">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
                <li>
              <x-dropdown-link :href="route('logout')" class="nav-link"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  <strong>Déconnexion</strong>
              </x-dropdown-link>
          </form>
               </li>
              </div>
            </ul>
          
            <div class="search_bar">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-secondary" type="submit">Search</button></div>
            </form>
          </div>
        </div>
      </nav>
      @yield('content')
    </body>
</html>
