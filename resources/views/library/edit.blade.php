
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
            <h3 align="center">Please Edit Your Book Details </h3>
          <a href="{{route('library.index')}}" class="btn btn-success">All Book Details</a>
        </div>

        <div class="col-md-12">
             <form method="POST" action="{{route('library.update',$edit_data->id)}}">
                 @method('PUT')
                 @csrf
             <div class="mb-3">
            <label for="bookname" class="form-label">Book Name</label>
           <input type="text" name="bookname" class="form-control"  placeholder="Book Name" value="{{$edit_data->bookname}}">
        </div>
        <div class="mb-3">
          <label for="bookdes" class="form-label">Book Description</label>
          <textarea class="form-control"name="bookdes"placeholder="Book Description"  rows="3">{{$edit_data->bookdes}}</textarea>
        </div>
        <div class="mb-3">
            <label for="authorname" class="form-label">Author Name</label>
           <input type="text" name="authorname" class="form-control"  placeholder="Author Name" value="{{$edit_data->authorname}}">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
           <input type="number" name="quantity" class="form-control"  placeholder="Quantity" value="{{$edit_data->quantity}}">
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