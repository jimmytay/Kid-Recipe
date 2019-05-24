@extends('layout.app')
@section('body')

<br>
<div class="container4" >
  <div class="view overlay zoom">
  <h2><font color="blue" size="7">Little Chefs Recipe</font></h2>
  <?php if($recipes->isEmpty()){ ?>


<img height="500" width="500" align="center" src="https://png.pngtree.com/element_origin_min_pic/16/12/16/776c610c0c33a71867fc53b665db9f1b.jpg">
    <h5 align="center"><font size="7">Sorry,Product not found</font></h5>
  <?php } else{ ?>
<div class="row">


      @foreach($recipes as $recipe)
  <div class="col-md-4" style="margin-top:60px">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

      <?php
      $img = explode(',',$recipe->imageUpload)[0];

      ?>

        <img class="card-img-top" src="{{asset('/images/' .$img )}}"></img>




        <div class="card-body">


            <p class="card-text">
              <strong><font size="6" color="blue">{{ $recipe->recipeTitle}}</font></strong>
              </p>
              <p class="card-text">
                  Category: <strong>{{ $recipe->recipeCategory}}</strong>
              </p>
              <p class="card-text">
                  Description: <strong>{{ $recipe->description}}</strong>
                </p>
              <br><br>
            </div>

      </div>

              @endforeach
  <?php }?>

<br></div>
    <a class="btn btn-outline-primary" href="{{ url()->previous() }}">Back</a>

  </div>
</div>

@endsection
