
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Project</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
 
<div class="container">
   
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Project Data</h3>
  <br />
  
   
  <form method="post" action="{{url('project')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="u_num" class="form-control" placeholder="Enter Unit ID" required />
   </div>
   <div class="form-group">
    <input type="text" name="p_num" class="form-control" placeholder="Enter Project Name" required />
   </div>
   <div class="form-group">
    <input type="text" name="designation" class="form-control" placeholder="Enter Designation"  required />
   </div>
 
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  @csrf
  </form>
 </div>
</div>

</div>
 
</body>
</html>