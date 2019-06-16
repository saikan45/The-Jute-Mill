<!DOCTYPE html>
<html lang="en">
<head>
  <title>Join</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2 align="center">Join Two Table</h2>
  <!-- <p>The .table-striped class adds zebra-stripes to a table:</p>   -->          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Unit ID</th>
        <th>Unit Name</th>
        <th>Location</th>
        <th>Product Id</th>
        <th>Quantity</th>
        <th>Price</th>
      
      </tr>
    </thead>
    <tbody>
      @foreach($jo1 as $e)
      <tr>
        <td>{{$e->u_num}}</td>
        <td>{{$e->u_name}}</td>
        <td>{{$e->location}}</td>
        <td>{{$e->p_id}}</td>
        <td>{{$e->quantity}}</td>
        <td>{{$e->price}}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>
 