<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>person history</title>
  </head>
  <body>
  <x-staff-nav-bar />
    <div class="container col-6 pt-5">
        <h2> </h2>
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
    <form method='POST' action="{{route('personhistory')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date:</label>
            <input type="date" class="form-control" name="date" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIC:</label>
            <input type="text" class="form-control" name="nic" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Vaccine Product</label>
            <input type="text" class="form-control" name="vp" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Batch Number</label>
            <input type="number" class="form-control" name="bnum" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Vaccination Status:</label>
            <input type="number" class="form-control" name="vstatus" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>