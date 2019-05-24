<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="UTF-8">
  <title>Jimmy Recipe</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <style>
   span.animated {
     animation-duration: 2.5s;
     animation-iteration-count: infinite;
     }

     .container li{
       -webkit-transition: margin 0.5s ease-out;
    -moz-transition: margin 0.5s ease-out;
    -o-transition: margin 0.5s ease-out;
     }

     .navbar li:hover{
       margin-top: 4px;
       background-color: lightblue;
     }

     .navbar{
       height:100px;
      background:rgba(255,255,255,0.5);
      margin-left: 10px;
      margin-right: 10px;
     }
     .navbar a{
       text-align: center;
       font-size: 20px;
       font-family: "Comic Sans MS", cursive, sans-serif;

     }

     .navbar button{
        font-family: "Comic Sans MS", cursive, sans-serif;
     }



     .container p{
        font-family: "Comic Sans MS", cursive, sans-serif;
     }

     .container h4{
        font-family: "Comic Sans MS", cursive, sans-serif;
     }

     .container h5{
        font-family: "Comic Sans MS", cursive, sans-serif;
     }

     .container h2{
        font-family: "Comic Sans MS", cursive, sans-serif;
     }

     .container label{
        font-family: "Comic Sans MS", cursive, sans-serif;
     }

     .container8 h3{
          font-family: "Comic Sans MS", cursive, sans-serif;
     }

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

 div.container7 h2{
   text-align: center;
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
 to { width: 50% }
 }

 /* The typewriter cursor effect */
 @keyframes blinking-cursor {
 from, to { border-color: transparent }
 50% { border-color: orange; }
 }

 .carousel-inner{
   position:absolute;
   bottom: 50px;
left: 120px;
width: 500px;

 }

 .button {
     margin: 10%;
     text-align: center;
 }

 .btn-hover {
     width: 100px;
     font-size: 16px;
     font-weight: 600;
     color: #fff;
     cursor: pointer;
     margin: 20px;
     height: 40px;
     text-align:center;
     border: none;
     background-size: 300% 100%;

     border-radius: 50px;
     moz-transition: all .4s ease-in-out;
     -o-transition: all .4s ease-in-out;
     -webkit-transition: all .4s ease-in-out;
     transition: all .4s ease-in-out;
 }

 .btn-hover:hover {
     background-position: 100% 0;
     moz-transition: all .4s ease-in-out;
     -o-transition: all .4s ease-in-out;
     -webkit-transition: all .4s ease-in-out;
     transition: all .4s ease-in-out;
 }

 .btn-hover:focus {
     outline: none;
 }

 .btn-hover.color-9 {
     background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
     box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
 }



 .title1 p2{
   position:absolute;
   bottom: 0px;
left: 600px;
   font-family: "Comic Sans MS", cursive, sans-serif; /* Web-safe typewriter-like font */
   font-size:30px;
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
 to { width: 50% }
 }

 /* The typewriter cursor effect */
 @keyframes blinking-cursor {
 from, to { border-color: transparent }
 50% { border-color: orange; }
 }

 .container4 img{
   transition: transform .2s;
 }

 .container4 img:hover{
   transform: scale(1.5);
 }

 .profile img{
   position:absolute;
   bottom: 190px;
left: 800px;
width: 500px;

 }

 .td {
   position:absolute;
   bottom: 200px;
left: 1000px;
width: 300px;
 }

 div.td h4{
   font-sizw: 20px;
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

.container8 p{
  white-space: pre-line;
}

div.container4 h2{
  font-sizw: 20px;
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

.bt{
  position:absolute;
  bottom: -250px;
right: 500px;
width: 300px;
}

.next{
  position:absolute;
  bottom: -50px;
right: 260px;
width: 300px;
}

.previous{
  position:absolute;
  bottom: -50px;
right: 1030px;
width: 300px;
}

.container8 p{
  font-size: 20px;
}

</style>

   <link rel="stylesheet" href="../4/cerulean/bootstrap.css" media="screen">
   <link rel="stylesheet" href="../_assets/css/custom.min.css">
   <link href="/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">




<!-- Custom styles for this template -->
<link href="css/blog-post.css" rel="stylesheet">
<?php if(Auth::user()->isAdmin()){?>
  <div class="navbar navbar-expand-lg navbar-light navbar-laravel " >

         <div class="icon">

         <a href="recipe.home" class="navbar-brand ">
           <img src="https://pngimage.net/wp-content/uploads/2018/06/kawaii-food-png-4.png" width="70" height="70" alt="">


           Little Chefs Home</a>
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

           <span class="navbar-toggler-icon "></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav">
           <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ URL::route('recipe.showBreakfast')}}">Breakfast</a>
            <a class="dropdown-item" href="{{ URL::route('recipe.showLunch')}}">Lunch</a>
            <a class="dropdown-item" href="{{ URL::route('recipe.showDinner')}}">Dinner</a>
            <a class="dropdown-item" href="{{ URL::route('recipe.showDessert')}}">Dessert</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recipe.create">Add recipe</a>
        </li>
             <li class="nav-item">
               <a class="nav-link" href="recipe.show">Show all recipes</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="recipe.bookmark">Show all bookmarks</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="recipe.about">About Me</a>
             </li>
           </ul>
         </div>

         <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="nav navbar-nav ml-auto">
             <form action="/search" method="POST" role="search">
      {{ csrf_field() }}
             <form class="form-inline my-2 my-lg-0">
               <div class="input-group">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" name="q"><span class="input-group-btn">
      <button class="btn btn-hover my-2 my-sm-0 color-9" type="submit">Search<span class="glyphicon glyphicon-search"></span></button></span>
    </form>
  </form>
    <li class="nav-item">
      <a class="nav-link text-dark" href="user.profile">{{Auth::user()->name}}</a>
    </li>

           </ul>
         </div>
       </div>


     </div>
<?php }
    else{?>
      <div class="navbar navbar-expand-lg navbar-light navbar-laravel " >

             <div class="icon">

             <a href="{{ URL::route('recipe.home')}}" class="navbar-brand ">
               <img src="https://pngimage.net/wp-content/uploads/2018/06/kawaii-food-png-4.png" width="70" height="70" alt="">


               Little Chefs Homepage</a>
             </div>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

               <span class="navbar-toggler-icon "></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav">
               <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ URL::route('recipe.showBreakfast')}}">Breakfast</a>
                <a class="dropdown-item" href="{{ URL::route('recipe.showLunch')}}">Lunch</a>
                <a class="dropdown-item" href="{{ URL::route('recipe.showDinner')}}">Dinner</a>
                <a class="dropdown-item" href="{{ URL::route('recipe.showDessert')}}">Dessert</a>
              </div>
            </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{ URL::route('recipe.show')}}">Show all recipes</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{ URL::route('recipe.bookmark')}}">Show all bookmarks</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{ URL::route('recipe.about')}}">About me</a>
                 </li>
               </ul>
             </div>

             <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="nav navbar-nav ml-auto">
                 <form action="/search" method="POST" role="search">
          {{ csrf_field() }}
                 <form class="form-inline my-2 my-lg-0">
                   <div class="input-group">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" name="q"><span class="input-group-btn">
          <button class="btn btn-hover my-2 my-sm-0 color-9" type="submit">Search<span class="glyphicon glyphicon-search"></span></button></span>
        </form>
      </form>
        <li class="nav-item">
          <a class="nav-link text-dark" href="user.profile">{{Auth::user()->name}}</a>
        </li>

               </ul>
             </div>
           </div>


         </div>
      <?php }?>


<body style="background-color:lightblue;">
  <div class="container bg-light">
    <div class="row">
      @section('body')
      @show

    </div>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../_vendor/jquery/dist/jquery.min.js"></script>
<script src="../_vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../_assets/js/custom.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
