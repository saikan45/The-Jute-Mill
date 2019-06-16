
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Employee</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <style>
.error {
  color: red;
  font-size: 13px;
}

.reg {
  background-color: lavender;
  border: darkcyan 2px solid;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-top: 10px;
  padding-bottom: 10px;
  display: block;
  width: 300px;
  align-content: center;
}

.top {
  padding-left: 20px;
}

.regin {
  border: 2px solid green;
  border-radius: 4;
  padding-left: 10px;
}

/*.regtext {
  padding-left: 10px;
}*/

.formHeader {
  background-color: lavender;
  margin-left: auto;
  margin-right: auto;
  width: 303px;
  text-align: left;
  border: 40px 2px 0 2px;
  border-top: 50px;
  border-bottom: 0px;
  border-top-left-radius:  4px;
  border-top-right-radius: 4px; 
  border-style: solid;
  border-color: darkcyan;
  font-family: fantasy;
  font-size: 20px;
  padding-bottom: 10px;
  padding-left: 5px;
  text-decoration: underline;
}

.middleHeader {
  text-align: left;
  background-color: inherit;
  font-family: fantasy;
  padding-left: 5px;
  font-size: 20px;
  border-top: 20px;
  border-bottom: 4px;
  border-left: 2px;
  border-right: 2px;
  border-style: solid;
  border-color: darkcyan;
}

.login a {
  margin-right: 10%;
  margin-left: 57%;
}

</style>
</head>
<body>
 
 <div class="formHeader">Add Employee Information</div>
  <form class="reg" method="POST" action="employeex">
    <div class='top'>
      <span class="regtext">Employee Name</span><br>
      <input class="regin" type="text" name="name"><br><br>   
      <span class="regtext"> Email</span><br>
      <input class="regin" type="text" name="email"><br><br>
     <span class="regtext">Type</span><br>
     <input class="regin" type="text" name="type"><br><br>
        
    <span class="regtext">Phn Number</span><br><input class="regin" type="text" name="phn_no"><br><br>

        <span class="regtext">Address</span><br><input class="regin" type="text" name="address"><br><br>
        
        <span class="regtext">Age</span><br><input class="regin" type="text" name="age"><br><br>
        <span class="regtext">Gender</span><br><input class="regin" type="text" name="gender"><br><br>
        <span class="regtext">Salary</span><br><input class="regin" type="text" name="salary"><br><br>
      </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" /></div>
  @csrf
</form>
 <!-- CREATE TRIGGER `age_check` BEFORE INSERT ON `employee` FOR EACH ROW IF NEW.age<0 THEN SET NEW.age=18; END IF; -->
</body>
</html>