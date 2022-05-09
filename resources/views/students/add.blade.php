
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Library</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 align="center">Please Add Your Student Details </h3>
          <a href="{{route('student.index')}}" class="btn btn-success">All Student's Details</a>
        </div>

        <div class="col-md-12">
             <form method="post" action="{{route('student.store')}}">
                 @csrf
             <div class="mb-3">
            <label for="stuName" class="form-label">Student Name</label>
           <input type="text" name="stuName" class="form-control"  placeholder="Student Name">
        </div>
        <div class="mb-3">
          <label for="fName" class="form-label">Father Name</label>
          <input type="text" name="fName" class="form-control"  placeholder="Father Name">
        </div>
        <div class="mb-3">
            <label for="mName" class="form-label">Mother Name</label>
           <input type="text" name="mName" class="form-control"  placeholder="Mother Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
           <input type="email" name="email" class="form-control"  placeholder="Email Address">
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile No</label>
           <input type="number" name="mobile" class="form-control"  placeholder="Mobile No">
        </div>
        <div class="d-grid gap-2">
  
          <button type="submit" class="btn btn-primary" type="button">Button</button>
        </div>
             </form>
        </div>
    
      
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