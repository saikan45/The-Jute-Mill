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
  <h2> Product's Data Show</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Product ID</th>
        <th>Unit ID</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($product as $e)
      <tr>

        <td>{{$e->p_id}}</td>
        <td>{{$e->u_num}}</td>

        <td>{{$e->name}}</td>

        <td>{{$e->quantity}}</td>
        <td>{{$e->price}}</td>
        
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>