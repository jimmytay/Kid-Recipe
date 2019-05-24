@extends('layout.app')
@section('body')

<div class="container">
  <div class="container" style="margin-top:60px">
  <h2>Edit Profile</h2>
  <div class="profile">
  <img src="https://www.xda-developers.com/files/2010/04/cartoon-chef.jpg">
  </div>
  <form action="{{ action('userController@update',$id) }}" method="post"   enctype="multipart/form-data">
    {{ csrf_field() }}

    <br />
    <fieldset>
    <div class="form-group has-success">
      <label class="form-control-label" for="inputSuccess1">Name:</label>
    <input class="form-group is-valid" type="text" name="name" id="name" value="{{$users->name}}" required />
  </div>
  </fieldset>

  <div class="form-group has-success">
    <label class="form-control-label" for="inputSuccess1">Age:</label>
  <input class="form-group is-valid" type="text" name="age" id="age" value="{{$users->age}}" required />
</div>

<div class="form-group has-success">
  <label class="form-control-label" for="inputSuccess1">Gendar:</label>
<input class="form-group is-valid" type="text" name="gendar" id="gendar" value="{{$users->gendar}}" required />
</div>

<div class="form-group has-success">
  <label class="form-control-label" for="inputSuccess1">Email:</label>
<input class="form-group is-valid" type="text" name="email" id="email" value="{{$users->email}}" required />
</div>



{{method_field('PUT')}}

  <input class="btn btn-outline-primary" type="submit" value="Save" />
</form>
<br>
<br>
</div></div>

<a class="btn btn-outline-primary" href="{{ url()->previous() }}">Back</a>
@endsection
