@extends('layout.app')
@section('body')

  <br>
  <div class="container8" style="margin-top:60px">
    <div class="view overlay zoom">






    <div class="w3-content w3-display-container">
       @foreach(explode(',',$recipes->imageUpload) as $i)
  <img class="card-img-top" align="middle" style="width:800px;height:600px;" src="{{asset('/images/' .$i)}}"></img>
    @endforeach
<div class="previous">
  <button class="btn btn-outline-primary w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  </div>
<div class="next">
  <button class="btn btn-outline-primary w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button></div>
    </div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("card-img-top");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>



<div class="td">
    <h4 class="card-title"><font size="6" color="navy">{{ $recipes->recipeTitle}}</font></h4>
    <p class="card-text">
      <strong><font color="blue">Recipe by</font></strong>: {{ $recipes->author}}
  </p>
    <p class="card-text">
        <strong><font color="blue">Description</font></strong>: {{ $recipes->description}}
      </p><br><br>
      <?php

      $userID = Auth::user()->id;

      //$bookmarkData = DB::table('bookmark')->join('recipes','recipes.id','=','bookmark.recipe_id')->join('users','users.id','=','bookmark.user_id')->where([['bookmark.recipe_id','=',$recipes->id],['bookmark.user_id',$userID]])->get();
      $count=App\Bookmark::where(['recipe_id'=>$recipes->id])->where(['user_id'=>$userID])->count();

      $BookmarkRecipe = DB::table('bookmark')->join('recipes','recipes.id','=','bookmark.recipe_id')->join('users','users.id','=','bookmark.user_id')->select('bookmark.recipe_id')->get();
      $User = DB::table('bookmark')->join('recipes','recipes.id','=','bookmark.recipe_id')->join('users','users.id','=','bookmark.user_id')->select('bookmark.user_id')->get();
      $added = DB::table('bookmark')->select('isAdded')->where('isAdded','=','false');

      if($count=="0"){
        ?>
        <form action="{{route('recipe.addBookmark')}}" method="post" role="form">
          {{csrf_field()}}
          <input type="hidden" value="{{$recipes->id}}" name="recipe_id">
          <button type="submit" class="btn btn-outline-primary">
            Add to your favourite<img height="50" width="50" src="https://cdn1.iconfinder.com/data/icons/basic-ui-elements-coloricon/21/32-512.png"></button>


        </form>
      <?php }else{?>
        <h3>It is your favourite already<img height="30" width="30" src="https://cdn1.iconfinder.com/data/icons/basic-ui-elements-coloricon/21/32-512.png"></h3>
        <?php }?>
      <div class="bt">
        <a class="btn btn-outline-primary" href="{{ URL::route('recipe.edit',$recipes['id'])}}" >Add snapshot</a></div>
</div>
  <div class="card-body">
<div class="row">


          <div class="col">
          <p class="card-text">
              <img width="50" height="50 "src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSx92o0jsRVBCEIM_1HHxYMBu-hMQQ5V5S20-I86NutNvMawKiTEg">:<strong>{{ $recipes->timeEstimate}}</strong>
          </p></div>

          <div class="col">

              <p class="card-text">
                  <strong><font color="blue">Category</font></strong>: {{ $recipes->recipeCategory}}
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
            <p class="card-text">
                <strong><font color="blue">Steps</font></strong>: <br />{{ $recipes->steps}}
            </p>
          </div>
            <div class="col-sm-3">
              <p class="card-text">
                  <strong><font color="blue">Ingredients</font></strong>: <br />{{ $recipes->ingredient}}
              </p>
              <a class="btn btn-outline-primary" href="{{ URL::route('recipe.showById2',$recipes['id'])}}" >Switch to grams</a>
            </div>
<div class="col-sm-3">
            <p class="card-text">
                <strong><font color="blue">NutritionFact</font></strong>: <br /> {{ $recipes->nutritionFact}}
            </p>
          </div>
            </div>

              <br><br>
<a class="btn btn-outline-primary" href="{{ url()->previous() }}">Back</a>


  </div>




  </div>

  @endsection
