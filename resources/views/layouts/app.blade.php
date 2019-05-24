<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Little Chefs Recipe') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>


         @-webkit-keyframes swinging{
         0%{-webkit-transform: rotate(10deg);}
         50%{-webkit-transform: rotate(-5deg)}
         100%{-webkit-transform: rotate(10deg);}
     }

     @keyframes swinging{
         0%{transform: rotate(10deg);}
         50%{transform: rotate(-5deg)}
         100%{transform: rotate(10deg);}
     }

     .icon img{
         -webkit-transform-origin: 50% 0;
         transform-origin: 50% 0;
         -webkit-animation: swinging 3.5s ease-in-out forwards infinite;
         animation: swinging 3.5s ease-in-out forwards infinite;
     }


     body {
         background-image: url("https://i.pinimg.com/originals/63/30/9e/63309e99b29084f509d182f748f3f35f.jpg");
       background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: left;

     }

     .cord-body h3{
        font-family: "Comic Sans MS", cursive, sans-serif;
     }

     div.card-header{
       font-family: "Comic Sans MS", cursive, sans-serif; /* Web-safe typewriter-like font */
 overflow: hidden; /* Ensures the content is not revealed until the animation */
 white-space: nowrap; /* Keeps the content on a single line */
 margin: 0 auto; /* Gives that scrolling effect as the typing happens */
 letter-spacing: .15em; /* Adjust as needed */
 animation:
   typing 3.5s steps(30, end),
   blinking-cursor .5s step-end infinite;
     }

     @keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blinking-cursor {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}

     div.card-body{
       font-family: "Comic Sans MS", cursive, sans-serif;
     }

     a.nav-link{
       font-family: "Comic Sans MS", cursive, sans-serif;
     }

     .card{
        background:rgba(255,255,255,0.5);
     }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
          <div class="container">
            <div class="icon">

            <a href="#" class="navbar-brand animated bounceInDown">
              <img src="https://pngimage.net/wp-content/uploads/2018/06/kawaii-food-png-4.png" width="50" height="50" alt="">


              <font size="5">Little Chefs Recipe</font></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

              <span class="navbar-toggler-icon animated bounce"></span>
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
                                <a class="nav-link" href="{{ route('login') }}"><font size="5">{{ __('Login') }}</font></a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}"><font size="5">{{ __('Register') }}</font></a>
                                @endif
                            </li>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
