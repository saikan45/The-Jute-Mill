<!DOCTYPE html>
<html lang="en">
<head>
  <title>Subquery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Subquery</h2>
  <!-- <p>The .table-striped class adds zebra-stripes to a table:</p>     -->        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Salary</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sub as $e)
      <tr>
        <td>{{$e->name}}</td>
        <td>{{$e->email}}</td>
        <td>{{$e->phn_no}}</td>
        <td>{{$e->address}}</td>
        <td>{{$e->age}}</td>
        <td>{{$e->gender}}</td>
        <td>{{$e->salary}}</td>
        <td>{{$e->jointime}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>