<!doctype html>
<html lang="en">
  <head>
    <title>home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
<div class="container mt-5 border p-5">
  <div class="row">
    <div class="col-6 m-auto">
      <h3 class="text-center">Register form</h3>
      <form action="{{url('/')}}/register" method="POST">
        @csrf
        @php
            $demo = 1;
        @endphp
        <x-input type="text" name="name" label="Name" :demo="$demo"/>
        <x-input type="email" name="email" label="Email"/>
        <x-input type="password" name="password" label="Password"/>
        <x-input type="password" name="confirm_password" label="Confirm Password"/>
        {{-- <x-input type="email" name= "email" label = "email"/>
        <x-input type="password" name="password" label = "password"/>
        <x-input type="password" name="confirm_password" label = "Confirm Password"/> --}}
        {{-- <div class="mb-3">
          <label for=" " class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id=" "  > 
          <span class="text-danger"> 
            @error('name')
            {{$message}}
            @enderror
          </span>
        </div> --}}
        {{-- <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
          <span class="text-danger"> 
            @error('email')
            {{$message}}
            @enderror
          </span>
         </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name='password' id="exampleInputPassword1">
          <span class="text-danger"> 
            @error('password')
            {{$message}}
            @enderror
          </span>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" name='confirm_password' id="exampleInputPassword1">
          <span class="text-danger"> 
            @error('confirm_password')
            {{$message}}
            @enderror
          </span>
        </div> --}}
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>