<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Library Details</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
       <div class="col-md-12 mx-auto">
            <h3 align="center">Library Details</h3>
            <a href="{{route('library.create')}}" class="btn btn-success">Add Book Details</a>

            @if(Session::has('msg'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}"> 
                {{Session::get('msg')}}
            </p>
            @endif
       </div>
        <div class="col-md-12">
        <table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Book Name</th>
      <th scope="col">Book Description</th>
      <th scope="col">Author Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($showbooks as $showbook)
    <tr>
    <th scope="row">{{ $loop->iteration}}</th>
      <td>{{ $showbook->bookname }}</td>
      <td>{{ $showbook->bookdes}}</td>
      <td>{{$showbook->authorname}}</td>
      <td>{{$showbook->quantity}}</td>
      <td>
        <a href="{{route('library.show', $showbook->id)}}" class="btn btn-info">Show</a>
        <a href="{{route('library.edit',$showbook->id)}}" class="btn btn-primary">Edit</a>
      </td>
    </tr>
  @endforeach
   
  </tbody>
</table>
        </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>