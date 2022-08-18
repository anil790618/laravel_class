<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="container my-5 p-5 bg-secondary">
        <div class="row">
            <div class="col-10 m-auto">
                <h4 class="text-center">Registration Form</h4>
                  <form class="row g-3" action="{{url('/')}}/registeruser" method="POST">
                   @csrf
                    <div class="col-md-6">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="">
                      </div>
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="inputEmail4">
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
                      <input type="text" class="form-control" id="" name="country" placeholder="1234 Main St">
                    </div>
                    <div class="col-6">
                      <label for="inputAddress" class="form-label">state</label>
                      <input type="text" class="form-control" id="inputAddress" name="state" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
                    </div>
                  
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Gender</label><br>
                    <input type="radio" name="gender" id="" value="M">Male
                    <input type="radio" name="gender" id="" value="F">female
                    <input type="radio" name="gender" id="" value="O">other

                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Dob</label>
                    <input type="date" name="dob" id="" class="form-control">

                  </div>
                   
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>