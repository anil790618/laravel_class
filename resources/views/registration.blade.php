<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="{{url('/')}}">Navbar</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="{{url('/registeruser/registeruser_view')}}">Data View <span class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/registeruser')}}">Register</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                      <a class="dropdown-item" href="#">Action 1</a>
                      <a class="dropdown-item" href="#">Action 2</a>
                  </div>
              </li>
          </ul>
          <form class="d-flex my-2 my-lg-0">
              <input class="form-control me-sm-2" type="text" placeholder="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
      </div>
  </nav>
    <div class="container my-5 p-5 bg-secondary">
        <div class="row">
            <div class="col-10 m-auto">
                <h4 class="text-center">{{$title}}</h4>
                  {{-- <form class="row g-3" action="{{url('/')}}/registeruser" method="POST"> --}}
                  <form class="row g-3" action="{{$url}}" method="POST">
                   @csrf
                    <div class="col-md-6">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="" value="{{$customer->name}}">
                        <span class="text-danger"> 
                          @error('name')
                          {{$message}}
                          @enderror
                        </span>
                      </div>
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="inputEmail4" value="{{$customer->email}}">
                      <span class="text-danger"> 
                        @error('email')
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="inputPassword4">
                      <span class="text-danger"> 
                        @error('password')
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" name="confirm_password" id="inputPassword4">
                      <span class="text-danger"> 
                        @error('confirm_password')
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                    <div class="col-6">
                      <label for="inputAddress" class="form-label">country</label>
                      <input type="text" class="form-control" id="" name="country" placeholder="1234 Main St" value="{{$customer->country}}">
                      <span class="text-danger"> 
                        @error('country')
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                    <div class="col-6">
                      <label for="inputAddress" class="form-label">state</label>
                      <input type="text" class="form-control" id="inputAddress" name="state" placeholder="1234 Main St" value="{{$customer->state}}">
                      <span class="text-danger"> 
                        @error('state')
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" value="{{$customer->address}}">
                      <span class="text-danger"> 
                        @error('address')
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                  
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Gender</label><br>
                    <input type="radio" name="gender" id="" value="M" {{$customer->gender == "M"? "checked": ""}}>Male
                    <input type="radio" name="gender" id="" value="F" {{$customer->gender == "F"? "checked": ""}}>female
                    <input type="radio" name="gender" id="" value="O" {{$customer->gender == "O"? "checked": ""}}>other
                    <span class="text-danger"> 
                      @error('gender')
                      {{$message}}
                      @enderror
                    </span>
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Dob</label>
                    <input type="date" name="dob" id="" class="form-control" value="{{$customer->dob}}">
                    <span class="text-danger"> 
                      @error('dob')
                      {{$message}}
                      @enderror
                    </span>
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