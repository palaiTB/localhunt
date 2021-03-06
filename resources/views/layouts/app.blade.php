<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <link rel="shortcut icon" type="images/png" href="images/logo1.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LocalWire</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


</head>
<body>
<div id="app">

    <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm justify-content-end">
        <div class="container-fluid">
            <div class="d-flex flex-nowrap w-100"> <!-- for the toggler and navbar to stay on the same line -->
                <a class="navbar-brand" href="/"><img src="https://239795-735906-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2019/03/local-wire1-copy-1-2.png" width="17%" alt=""></a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                <ul class="navbar-nav text-right">
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

<footer class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-left">
                <h5 class="font-weight-bolder" style="color: white">Corporate Info</h5>
                <a style="color: white" href="">About Us</a> <br>
                <a style="color: white"  href="">Our Advertisers</a> <br>
                <a style="color: white"  href="">Community</a> <br>
                <a style="color: white"  href="">Careers</a> <br>
            </div>
            <div class="col-lg-3 text-left">
                <h5 class="font-weight-bolder" style="color: white">Support</h5>
                <a style="color: white" href="">FAQs</a> <br>
                <a style="color: white"  href="">Contact Localwire</a> <br>
                <a style="color: white"  href="">Community Guidelines</a> <br>
            </div>
            <div class="col-lg-3 text-left">
                <h5 class="font-weight-bolder" style="color: white">Partnerships</h5>
                <a style="color: white" href="">Advertise on Localwire</a> <br>
            </div>
            <div class="col-lg-3 text-left">
                <h5 class="font-weight-bolder" style="color: white">Security</h5>
                <a style="color: white" href="">Copyright</a> <br>
                <a style="color: white"  href="">Terms of Use</a> <br>
                <a style="color: white"  href="">Privacy Policy</a> <br>
            </div>
        </div>
    </div>

    <div class="row" style="width: 20%; margin: auto">
        <div class="col-3">
            <img src="https://img.icons8.com/nolan/30/facebook-new.png">
        </div>
        <div class="col-3">
            <img src="https://img.icons8.com/nolan/30/twitter.png">
        </div>
        <div class="col-3">
            <img src="https://img.icons8.com/nolan/30/google-logo.png">
        </div>
        <div class="col-3">
            <img src="https://img.icons8.com/nolan/30/instagram-new.png">
        </div>
    </div>

    <br>
    Copyright <img src="https://img.icons8.com/ultraviolet/17/000000/copyright.png"> 2019 | Localwire.
</footer>

</html>

<script>

    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');

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
