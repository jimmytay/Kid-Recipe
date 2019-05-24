@extends('layout.app')

@section('body')
<div class="container" style="margin-top:60px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Welcome to Little Chefs Recipe</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="icon">
<img src="https://pngimage.net/wp-content/uploads/2018/06/kawaii-food-png-4.png" width="100" height="100" alt=""></div>
                    <h5 class="row justify-content-center">


                    You are logged in!

                  </h5>
                    <br>
                    <div class="row justify-content-center">
                      <?php if(Auth::user()->isAdmin()){?>

                          <a class="btn btn-outline-primary" href="{{ route('admin') }}">Click to continue to main page</a><?php }
                          else{?>
                            <a class="btn btn-outline-primary" href="{{ route('recipe.home') }}">Click to continue your journey</a>
                            <?php }?>

                  </div>
                  <img src="https://i.pinimg.com/originals/63/30/9e/63309e99b29084f509d182f748f3f35f.jpg">
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
