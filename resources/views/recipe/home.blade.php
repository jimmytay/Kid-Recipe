@extends('layout.app')
@section('body')
<style>

.container img{
  margin: 20px;
   -webkit-box-shadow: 4px 4px 4px rgba(0,0,0,0.2);
   -moz-box-shadow: 4px 4px 4px rgba(0,0,0,0.2);
   box-shadow: 4px 4px 4px rgba(0,0,0,0.2);
   -webkit-transition: all 0.5s ease-out;
   -moz-transition: all 0.5s ease;
   -o-transition: all 0.5s ease;
}

.container1 img:hover{
  -webkit-transform: rotate(-7deg);
 -moz-transform: rotate(-7deg);
 -o-transform: rotate(-7deg);
}


</style>
 <div class="container bg-light">

   <div class="row">
<div class="col-md-9">

<div id="carouselExampleControls"  style="margin-top:60px" class="carousel slide" data-ride="carousel">
 <div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJFFsw1BFG72xJy9JPtd_kUiI86fkykztbHZiYri1qYtB3THqELw">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="https://nickatitley.files.wordpress.com/2013/04/healthyeatingpost.jpg?w=493&h=335">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/articles/health_tools/15_surprisingly_healthy_foods_slideshow/493ss_thinkstock_rf_mixed_frozen_vegetables_close_up.jpg">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="https://i2.wp.com/fitandfunnow.com/wp-content/uploads/2018/07/health-benefits-of-eggs.jpg?fit=493%2C335&ssl=1">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="https://i0.wp.com/fitandfunnow.com/wp-content/uploads/2018/10/Best-and-Worst-Salads-for-Your-Health.jpg?fit=493%2C335&ssl=1">
</div>
</div>

<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
 </a>
</div>
<br><br>
</div>

</div>
<div class="title1">
  <p2><font color="navy">Little chef's Recipes</font></p2>
</div>
<div class="container1">
  <div class="view overlay zoom">
  <div class="row">

    @foreach($recipes as $recipe)
    <div class="col-md-4" style="margin-top:60px">



    <?php
    $img = explode(',',$recipe->imageUpload)[0];

    ?>

      <img class="card-img-top" width="70" height="280 "src="{{asset('/images/' .$img )}}"></img>

         <div class="card-body">
             <h4 class="card-title"><font size="6" color="blue">{{ $recipe->recipeTitle}}</font></h4>
             <p class="card-text">
                 Category: <strong>{{ $recipe->recipeCategory}}</strong>
             </p>

             <p class="card-text">
                 Description: <strong>{{ $recipe->description}}</strong>
               </p>

               <a class="btn btn-outline-primary" href="{{ URL::route('recipe.showById',$recipe['id'])}}" ><span>Click to view</span></a>
               <br><br>
             </div>


       </div>

               @endforeach


 </div>
   </div>

</div></div>

</div>











@endsection
