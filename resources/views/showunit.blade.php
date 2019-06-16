<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2> Unit's Data Show</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Unit ID</th>
        <th>Name</th>
        <th>Location</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($unit as $e)
      <tr>
         <td>{{$e->u_num}}</td>
        <td>{{$e->u_name}}</td>
        <td>{{$e->location}}</td>
        
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>