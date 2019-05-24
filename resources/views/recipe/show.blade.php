@extends('layout.app')
@section('body')

<br>
<div class="container4" >
  <div class="view overlay zoom">

    <h2><font color="blue" size="7">Little Chefs Recipe</font></h2>
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
              Category: <strong>{{ $recipe->recipeCategory}}</strong>
          </p>
          <p class="card-text">
              Description: <strong>{{ $recipe->description}}</strong>
            </p>

            <?php if(Auth::user()->isAdmin()){?>

              <a class="btn btn-outline-dark" href="{{ URL::route('recipe.edit',$recipe['id'])}}" >Edit</a><br><br><form method="POST" action ="{{action('recipeController@destroy',$recipe['id'])}}" >
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="DELETE"/>
      <button type="submit" class="btn btn-danger">Delete</button></form>
<br><br><br>
<?php }
                else{?>
                  <a class="btn btn-outline-primary" href="{{ URL::route('recipe.showById',$recipe['id'])}}" >Click to view</a>
                  <?php }?>


            <br><br>
          </div>

    </div>



            @endforeach  </div>
            <a class="btn btn-outline-primary" href="{{ url()->previous() }}">Back</a>
</div>
</div>

@endsection
