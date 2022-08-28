<!doctype html>
<html lang="en">
  <head>
    <title>view page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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
    {{-- <pre>
        {{print_r($customer)}}
    </pre> --}}
   <div class="container my-5">
    <div class="row">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{route('register.form')}}">
        <button class="btn btn-primary my-2" type="button">+ Add</button></a> 
      </div>
      <div class="col-12 m-auto border">
        <table class="table table-striped table-inverse table-responsive">
          <thead class="thead-inverse">
              <tr>
                  <th>sno</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>gender</th>
                  <th>address</th>
                  <th>state</th>
                  <th>Country</th>
                  <th>dob</th> 
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>
                  @foreach ($customer as $customer)
                  <tr>
                      <td scope="row">{{$customer->customer_id}}</td>
                      <td>{{$customer->name}}</td>
                      <td>{{$customer->email}}</td>
                      <td>{{$customer->gender}}</td>
                      <td>{{$customer->address}}</td>
                      <td>{{$customer->state}}</td>
                      <td>{{$customer->country}}</td>
                      <td>{{$customer->dob}}</td>
                      <td>
                        {{-- <a href="{{url('/registeruser/delete/')}}/{{$customer->customer_id}}"> <button class="btn btn-danger">Delete</button></a> --}}
                        <a href="{{route('customer.delete',['id'=>$customer->customer_id])}}"> <button class="btn btn-danger">Delete</button></a>
                        <a href="{{route('customer.edit',['id'=>$customer->customer_id])}}"> <button class="btn btn-primary">Edit</button></a>
                      </td>

                      
                  </tr>
                  @endforeach
                
                 
              </tbody>
         </table>
      </div>
    </div>
   </div>
   
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>