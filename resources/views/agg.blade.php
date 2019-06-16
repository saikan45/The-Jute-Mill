<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aggregate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 align="center">Maximum Salary Of an Employee
 <!--  <p>The .table-striped class adds zebra-stripes to a table:</p> -->            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Max_Salary</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ag as $e)
      <tr>
        <td>{{$e->salary}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>