<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Startup_Hunt</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Startup_Hunt
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a href="/home" class="nav-link">Profile</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>

<footer>
    <div class="row">
        <div class="col-4 text-center">
            <h4>Follow us!</h4>
            <br>
            <div class="container ">
                <div class="row" style="max-width: 50%; margin: auto">
                    <div class="col-3 text-right">
                        <img src="https://img.icons8.com/nolan/25/facebook-new.png">
                    </div>
                    <div class="col-3">
                        <img src="https://img.icons8.com/nolan/25/instagram-new.png">
                    </div>
                    <div class="col-3">
                        <img src="https://img.icons8.com/nolan/25/twitter.png">
                    </div>
                    <div class="col-3 text-left">
                        <img src="https://img.icons8.com/nolan/25/pinterest.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 text-center">
            <h4>Contact us</h4>
            <br>
            <img src="https://img.icons8.com/nolan/25/phone.png" class="mr-3"> <img src="https://img.icons8.com/nolan/25/important-mail.png">
        </div>
        <div class="col-4 text-center">
            <h4>Newsletter</h4>
            <br>
            <img src="https://img.icons8.com/nolan/25/secured-letter.png">
        </div>
    </div>
</footer>
</html>

<script>

    $(document).ready(function() {
        $(window).on('load', function() {
            function Preloader() {
                var preloader = $ ('.loader');
                preloader.delay(3000) .fadeOut (1000);
                // var preloader = $('.preloader');
                // preloader.delay (1500) .slideUp(500);
            }
            if ( ! sessionStorage.getItem( 'doNotShow' ) ) {
                sessionStorage.setItem( 'doNotShow', true );
                Preloader();
            }
            else {
                $ ('.loader, .preloader').hide();
                // $(".loader").attr("class", "d-none");
            }
        });
    });
</script>
