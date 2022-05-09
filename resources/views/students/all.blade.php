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
            <h3 align="center">Student's Details</h3>
            <a href="{{route('student.create')}}" class="btn btn-success">Add Student's Details</a>    
       </div>
        <div class="col-md-12">
        <table class="table table-striped text-center">
  <thead>
   
    <tr>
      <th scope="col">No</th>
      <th scope="col">Student Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($show_datas as $show_data)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
      <td>{{$show_data->stuName}}</td>
      <td>{{$show_data->fName}}</td>
      <td>{{$show_data->mName}}</td>
      <td>{{$show_data->email}}</td>
      <td>{{$show_data->mobile}}</td>
       <td>
          <a href="{{route('student.show',$show_data->id)}}" class="btn btn-info">Show</a>
          <a href="{{route('student.edit',$show_data->id)}}" class="btn btn-success">Edit</a>
          
                                </td>

       </td>
       <td>
       <form action="{{route('student.destroy',$show_data->id)}}" method="POST">
                                    @method('DELETE')    
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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