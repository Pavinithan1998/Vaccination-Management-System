<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Public dashboard</title>
  </head>
  <body>
    <x-navbar />
    
    
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item">Full Name: {{$user->fname}} {{$user->lname}}</li>
            <li class="list-group-item">Address {{$user->address}}</li>
            <li class="list-group-item">Gender: {{$user->gender}}</li>
            <li class="list-group-item">NIC/Passport: {{$user->nic}}</li>
            <li class="list-group-item">Date of Birth: {{$user->dob}}</li>
        </ul>

        <h3>Vaccination Details:</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" colspan="4">Vaccine Doses </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
            </table>

    </div>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>