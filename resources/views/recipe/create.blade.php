@extends('layout.app')
@section('body')
<div class="container">
  <h2>Add New Recipe</h2>
<form action="{{ route('recipe.store') }}" method="post"  action="{{url('/images')}}" enctype="multipart/form-data">
  {{ csrf_field() }}

  <br />
  <fieldset>
  <div class="form-group has-success">
    <label class="form-control-label" for="inputSuccess1">Recipe Title:</label>
  <input class="form-group is-valid" type="text" name="recipeTitle" required />
</div>
</fieldset>

<div class="form-group">
    <label class="form-group-label">Category of recipe:</label>
  <select id="recipeCategory" name="recipeCategory" onchange="getSelectedCategory" required>
    <option value="Breakfast">Breakfast </option>
    <option value="Lunch">Lunch</option>
    <option value="Dinner">Dinner </option>
    <option value="Dessert">Dessert</option>

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
  <textarea name="description" required></textarea>
</div>

<div class="form-group has-success">
  <label class="form-control-label" for="inputSuccess1">Author of recipe:</label>
<input class="form-group is-valid" type="text" name="author" required />
</div>

<div class="form-group has-success">
  <label class="form-control-label" for="inputSuccess1">Ingredient:</label>
  <textarea name="ingredient"  rows="5" cols="50" wrap="hard" style="white-space: pre-line;" required></textarea>
</div>

<div class="form-group has-success">
  <label class="form-control-label" for="inputSuccess1">Ingredient:</label>
  <textarea name="ingredientTwo"  rows="5" cols="50" wrap="hard" style="white-space: pre-line;" required></textarea>
</div>

<div class="form-group has-success">
  <label class="form-control-label" for="inputSuccess1">Steps:</label>
  <textarea name="steps" rows="5" cols="50" wrap="hard" style="white-space: pre-line;" required></textarea>
</div>

<div class="form-group has-success">
  <label class="form-control-label" for="inputSuccess1">Duration(by hour and min):</label>
<input class="form-group is-valid" type="text" name="timeEstimate" required />
</div>

<div class="form-group has-success">
  <label class="form-control-label" for="inputSuccess1">Nutrition Fact:</label>
  <textarea name="nutritionFact"  rows="5" cols="50" wrap="hard" style="white-space: pre-line;" required></textarea>
</div>


    <div class="form-group">
        <label for="recipeTitle">Upload Images:</label>
        <input type="file" class="form-control" name="imageUpload[]"/ multiple>
    </div>



  <input type="submit" value="Save" />

<br />

</form></div>

<a class="btn btn-outline-primary" href="{{ url()->previous() }}">Back</a>

@endsection
