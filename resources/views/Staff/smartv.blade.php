<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>smart vaccination</title>
  </head>
  <body>
    <x-staff-nav-bar />
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NIC</th>
                    <th scope="col">First Name </th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address </th>
                    <th scope="col">Mobile No </th>
                    <th scope="col" colspan='3'>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $p)
                <tr>
                    <td>{{$p->nic}}</td>
                    <td>{{$p->fname}}</td>
                    <td>{{$p->lname}}</td>
                    <td>{{$p->address}}</td>
                    <td>{{$p->mobile}}</td>
                    <td><a href="">View</a></td>
                    <td class="bg-success"><a href="">Approve</a></td>
                    <td class="bg-danger"><a href="{{"/delete/".$p['id']}}">Reject</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
  </body>
</html>