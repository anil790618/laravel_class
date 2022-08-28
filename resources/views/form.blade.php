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
    <div class="col-10 m-auto">
        <h4 class="text-center">Register form</h4>
          {{-- <form class="row g-3" action="{{url('/')}}/registeruser" method="POST"> --}}
          <form class="row g-3" action="{{url('/')}}/registeruser" method="POST">
           @csrf
            <div class="col-md-6">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id=""  >
                 
              </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="inputEmail4"  >
              
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="inputPassword4">
               
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="confirm_password" id="inputPassword4">
              
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">country</label>
              <input type="text" class="form-control" id="" name="country" placeholder="1234 Main St" >
             
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">state</label>
              <input type="text" class="form-control" id="inputAddress" name="state" placeholder="1234 Main St"  >
              
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St"  >
              
            </div>
          
          <div class="col-6">
            <label for="inputAddress" class="form-label">Gender</label><br>
            <input type="radio" name="gender" id="" value="M">Male
            <input type="radio" name="gender" id="" value="F" >female
            <input type="radio" name="gender" id="" value="O" >other
            
          </div>
          <div class="col-6">
            <label for="inputAddress" class="form-label">Dob</label>
            <input type="date" name="dob" id="" class="form-control" >
            
          </div>
           
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
    </div>
</div>
</div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>