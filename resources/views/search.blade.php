@extends('layout.app')
@section('body')
<br>
<div class="container4" style="margin-top:60px">

    @if(isset($recipes))
        <p><font size="7"> The Search results are :</font></p>

    <div class="view overlay zoom">
      <br>
      <br>
              <div class="row">
      @foreach($recipes as $recipe)
      <div class="col-md-4" style="margin-top:60px">



      <?php
      $img = explode(',',$recipe->imageUpload)[0];

      ?>

        <img class="card-img-top" src="{{asset('/images/' .$img )}}"></img>

        <div class="card-body">
            <h4 class="card-title">Recipe: {{ $recipe->recipeTitle}}</h4>
            <p class="card-text">
                Description: <strong>{{ $recipe->description}}</strong>
              </p>
              <p class="card-text">
                  Category: <strong>{{ $recipe->recipeCategory}}</strong>
              </p>
              <a class="btn btn-outline-primary" href="{{ URL::route('recipe.showById',$recipe['id'])}}" >Click to view</a>
              <br><br>
            </div>

</div>

              @endforeach
    @else <p> {{$message}} </p>

    @endif

      </div>

    </div>
  <a class="btn btn-outline-primary" href="{{ url()->previous() }}">Back</a>
  </div>
@endsection
