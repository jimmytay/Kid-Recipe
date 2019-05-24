<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Little Chefs Recipe</title>

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
       align-items: center;
       width: 500px;
       height: 500px;
         -webkit-transform-origin: 50% 0;
         transform-origin: 50% 0;
         -webkit-animation: swinging 3.5s ease-in-out forwards infinite;
         animation: swinging 3.5s ease-in-out forwards infinite;
     }

     .icon{
       position: absolute;
       bottom:200px;
      right:0%;
      left:20%;
      margin-left:-150px;
        font-size: 40px;
     }

     .nav-right{
       position: absolute;
       top:350px;
      right:0%;
      left:70%;
      margin-left:-150px;

     }

     .nav-right button{
          font-size: 30px;
     }

     .title h2{
       position: absolute;
       top:200px;
      right:0%;
      left:50%;
      margin-left:-150px;
       color: gray;
       font-family: monospace; /* Web-safe typewriter-like font */
 overflow: hidden; /* Ensures the content is not revealed until the animation */
 border-right: .15em solid orange; /* The typwriter cursor */
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

     body{
       background-color: lightgray;
     }

    </style>
</head>
<body>
  <div class="nav-left">
  <div class="icon">


    <img src="https://pngimage.net/wp-content/uploads/2018/06/kawaii-food-png-4.png" width="50" height="50" alt="">
  </div>

  <div class="title" >
    <h2 style="font-size: 55px">Little Chefs Recipe</h2>
  </div>
</div>
<div class="nav-right">

               <form action="login">
       <button type="submit" class="btn btn-outline-secondary">Join the journey</button>
    </form>

       </div>



</body>
