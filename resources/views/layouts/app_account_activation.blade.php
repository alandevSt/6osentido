<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

         <link
      rel="stylesheet"
      data-purpose="Layout StyleSheet"
      title="Web Awesome"
      href="/css/app-wa-d53d10572a0e0d37cb8d614a3f177a0c.css?vsn=d"
    >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-thin.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-light.css"
      >
      
        <link rel="stylesheet" href="{{url('css/main.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
        <!-- Fonts -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.5/tagify.css">
        <link rel="stylesheet" type="text/css" href="{{ url('css/slick-theme.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    </head>
    <body class="font-sans antialiased">
        <div class="scheduler-head fixed-top">
        <header class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#">
                            <img src="{{ url('img/logo-demostracion.png') }}" width="175" alt="">
                          </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                              <li class="nav-item {{ (Request::path() == 'booking-activation') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('booking-activation') }}">Elige la fecha y hora</a>
                              </li>
                              <li class="nav-item {{ (Request::path() == 'register-account-activation') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('register-account-activation') }}">Crear cuenta</a>
                              </li>
                              <li class="nav-item {{ (Request::path() == 'preferences-activation') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('preferences-activation') }}">Preferencias</a>
                              </li>
                              <li class="nav-item {{ (Request::path() == 'payment-activation') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('payment-activation') }}">Pago</a>
                              </li>
                              <li class="nav-item {{ (Request::path() == 'scheduled-session-activation') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('scheduled-session-activation') }}">Sesión agendada</a>
                              </li>
                            </ul>
                        </div>
                    </nav>
                </div>  
            </div>
        </header></div>
        <div class="min-h-screen bg-gray-100">
            


            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        
    </body>
</html>
