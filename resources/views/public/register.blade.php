<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Public Register</title>
  </head>
  <body>
    <div class="container col-6 pt-5">
        <h2>Public Enrollment </h2>
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
    <form method='POST' action="{{route('public')}}">
        @csrf
       
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" class="form-control" name="fname" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mobile No:</label>
            <input type="text" class="form-control" name="mobile" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label  class="form-label">Gender</label>
            <select  name='gender' class="form-select">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIC:</label>
            <input type="text" class="form-control" name="nic" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date of Birth:</label>
            <input type="date" class="form-control" name="dob" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label  class="form-label">District</label>
            <select  name='district' class="form-select">
                <option value="jaffna">Jaffna</option>
                <option value="Kandy">Kandy</option>
                <option value="Colombo">Colombo</option>
            </select>
        </div>

        <div class="mb-3">
            <label  class="form-label">MOH</label>
            <select  name='moh' class="form-select">
                <option value="jaffna">Jaffna</option>
                <option value="Kandy">Kandy</option>
                <option value="Colombo">Colombo</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Re-Password</label>
            <input type="password" class="form-control" name="repassword">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>