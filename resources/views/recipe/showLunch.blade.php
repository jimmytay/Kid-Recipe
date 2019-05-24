@extends('layout.app')
@section('body')

<br>
<div class="container4" >
  <div class="view overlay zoom">
    <h2><font color="blue" size="7">Lunch</font></h2>
<div class="row">

    @foreach($recipes as $recipe)
    <div class="col-md-4" style="margin-top:60px">



  <?php
  $img = explode(',',$recipe->imageUpload)[0];

   ?>

      <img class="card-img-top" src="{{asset('/images/' .$img )}}"></img>

    <div class="card-body">
      <h4 class="card-title"><font size="6" color="blue">{{ $recipe->recipeTitle}}</font></h4>
      <p class="card-text">
          Description: <strong>{{ $recipe->description}}</strong>
        </p>

        <a class="btn btn-outline-primary" href="{{ URL::route('recipe.showById',$recipe['id'])}}" >Click to view</a>
        <br><br>
</div>
  </div>


  @endforeach
  </div>
<a class="btn btn-outline-primary" href="{{ url()->previous() }}">Back</a>

</div>
</div>
@endsection
