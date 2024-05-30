<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/bcddbfbca7.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{url('css/main.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- uikit functions -->
        <script src="{{ asset('/js/uikit.js') }}"></script>
        <script src="{{ asset('/js/uikit-icons.min.js') }}"></script>
        <!-- uikit -->
        <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}" media="all">
    </head>
    <body class="font-sans antialiased">
        <header class="container-fluid fixed-top">
            <div class="row">
                <div class="col-lg-6">
                    <a href=""><img src="{{ url('img/logo.png') }}" alt="" class="logo img-fluid"></a>
                </div>
                <div class="col-lg-6 pr-0 text-right login">
                    <a href="">
                        <img src="{{ url('img/Vector.png') }}" alt="">
                    </a>
                </div>
            </div>
        </header>
        <div class="min-h-screen bg-gray-100">



            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
<footer>
    @include('partials.footer')
</footer>
</html>
