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
    {{-- <pre>
        {{print_r($customer)}}
    </pre> --}}
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
                
            </tr>
            @endforeach
          
           
        </tbody>
   </table>
   
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>