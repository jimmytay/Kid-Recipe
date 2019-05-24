@extends('layout.app')
@section('body')

<div class="container">
  <div class="container" style="margin-top:60px">

  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9w86EtHFMccTZbZPvb5RmKpkOCCnuOrDnbgUVsP5RTXJVYHsv">
<h2>My Profile</h2>
<div class="profile">
<img src="https://www.xda-developers.com/files/2010/04/cartoon-chef.jpg">
</div>
<label class="nav-link text-dark" ><font size="5">Name: {{Auth::user()->name}}</font></label>
<label class="nav-link text-dark" ><font size="5">Age: {{Auth::user()->age}}</font></label>
<label class="nav-link text-dark" ><font size="5">Gender: {{Auth::user()->gendar}}</font></label>
<label class="nav-link text-dark" ><font size="5">Email address: {{Auth::user()->email}}</font></label>




<a class="btn btn-outline-primary" href="{{ URL::route('user.edit',Auth::user()->id)}}" >Edit</a>
<a class="btn btn-outline-primary" href="user.logout" >Logout</a>
<br><br>
<a class="btn btn-outline-primary" href="recipe.home">Go back to Homepage</a>
</div></div>
@endsection
