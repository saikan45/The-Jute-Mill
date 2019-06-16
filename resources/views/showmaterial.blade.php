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
  <h2> Material's Data Show</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Material ID</th>
        
        <th> Project ID</th>
<th> Material Name</th>
        <th>Material Cost</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($material as $e)
      <tr>
          <td>{{$e->m_id}}</td>
         <td>{{$e->p_id}}</td> 
        <td>{{$e->name}}</td>
        
        <td>{{$e->m_cost}}</td>
        
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>