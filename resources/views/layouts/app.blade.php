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
                <a class="navbar-brand" href="/bhubaneswar"><img src="https://239795-735906-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2019/03/local-wire1-copy-1-2.png" width="17%" alt=""></a>
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
</html>

<script>
    $(document).ready(function() {
        $(window).on('load', function() {
            function Preloader() {
                var preloader = $ ('.loader');
                preloader.delay(4000) .fadeOut (1000);
                // var preloader = $('.preloader');
                // preloader.delay (1500) .slideUp(500);
            }
            if ( ! sessionStorage.getItem( 'doNotShow' ) ) {
                // sessionStorage.setItem( 'doNotShow', true );
                Preloader();
            }
            else {
                $ ('.loader, .preloader').hide();
                // $(".loader").attr("class", "d-none");
            }
        });
    });
</script>
