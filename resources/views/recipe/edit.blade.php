@extends('layout.app')
@section('body')

<div class="container">

<form action="{{ action('recipeController@update',$id) }}" method="post"  action="{{url('/images')}}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <?php if(Auth::user()->isAdmin()){?>
      <h2>Edit Recipe</h2>
    <br />
    <fieldset>
    <div class="form-group has-success">
      <label class="form-control-label" for="inputSuccess1">Recipe Title:</label>
    <input class="form-group is-valid" type="text" name="recipeTitle" value="{{$recipes->recipeTitle}}" required />
    </div>
    </fieldset>

    <div class="form-group">
      <label class="form-group-label">Category of recipe:</label>
    <select id="recipeCategory" name="recipeCategory" onchange="getSelectedCategory" required>
      <option {{old('recipeCategory',$recipes->recipeCategory)=="Breakfast"? 'selected':''}} value="Breakfast">Breakfast </option>
      <option {{old('recipeCategory',$recipes->recipeCategory)=="Lunch"? 'selected':''}}>Lunch</option>
      <option {{old('recipeCategory',$recipes->recipeCategory)=="Dinner"? 'selected':''}}>Dinner </option>
      <option {{old('recipeCategory',$recipes->recipeCategory)=="Dessert"? 'selected':''}}">Dessert</option>

    </select>
    <script>
    function getSelectedCategory(){
      var selectedCategory = document.getElementById("recipeCategory").value;
      console.log(selectedCategory);
    }
    </script>
    </div>

    <div class="form-group has-success">
    <label class="form-control-label" for="inputSuccess1">Recipe Description:</label>
    <textarea name="description" rows="5" cols="50" wrap="hard" required>{!! old('description', $recipes->description) !!}</textarea>
    </div>

    <div class="form-group has-success">
    <label class="form-control-label" for="inputSuccess1">Author of recipe:</label>
    <input class="form-group is-valid" type="text" name="author" value="{{$recipes->author}}" required />
    </div>

    <div class="form-group has-success">
    <label class="form-control-label" for="inputSuccess1">Ingredient:</label>
    <textarea name="ingredient" rows="5" cols="50" wrap="hard" style="white-space: pre-line;" required>{!! old('ingredient', $recipes->ingredient) !!}</textarea>
    </div>

    <div class="form-group has-success">
    <label class="form-control-label" for="inputSuccess1">Ingredient:</label>
    <textarea name="ingredientTwo"  rows="5" cols="50" wrap="hard" style="white-space: pre-line;" required>required>{!! old('ingredient', $recipes->ingredient) !!}</textarea>
    </div>

    <div class="form-group has-success">
    <label class="form-control-label" for="inputSuccess1">Steps:</label>
    <textarea name="steps" rows="5" cols="50" wrap="hard" required>{!! old('steps', $recipes->steps) !!}</textarea>
    </div>

    <div class="form-group has-success">
    <label class="form-control-label" for="inputSuccess1">Duration(by hour and min):</label>
    <input class="form-group is-valid" type="text" name="timeEstimate" value="{{$recipes->timeEstimate}}" required />
    </div>

    <div class="form-group has-success">
    <label class="form-control-label" for="inputSuccess1">Nutrition Fact:</label>
    <textarea name="nutritionFact"  rows="5" cols="50" wrap="hard" required>{!! old('ingredient', $recipes->nutritionFact) !!}</textarea>
    </div>


      <div class="form-group">
          <label for="recipeTitle">Upload Images:</label>
          @if($recipes->imageUpload)
          <img src="{{ url('/images/' . $recipes->imageUpload) }}" />
          @endif
          <input type="file" class="form-control" name="imageUpload[]" value="{{$recipes->imageUpload}}" multiple/>
      </div>

    {{method_field('PUT')}}

    <input type="submit" value="Save" />

    <br />

    </form></div>

    <a class="btn btn-outline-dark" href="{{ url()->previous() }}">Back</a>
    <?php }
      else{?>
        <div class="container">
          <h2>Add your snapshot</h2>
        <form action="{{ action('recipeController@update',$id) }}" method="post"  action="{{url('/images')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <?php
            $img = explode(',',$recipes->imageUpload)[0];

            ?>

              <img class="card-img-top" src="{{asset('/images/' .$img )}}"></img>
            <br>
              <label for="recipeTitle">Upload Images:</label>
              <input type="file" class="form-control" name="imageUpload[]" multiple/>
          </div>
          {{method_field('PUT')}}

            <input type="submit" value="Save" />
        </form>
        </div>

        <a class="btn btn-outline-primary" href="{{ url()->previous() }}">Back</a>
        <?php }?>


@endsection
