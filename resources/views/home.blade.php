
<!DOCTYPE html>
<html>
<title>The Cresent Jute Mills</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
  background: url(https://media.gettyimages.com/photos/women-working-in-dust-environmentinside-at-jute-processing-mill-near-picture-id1087922388?s=2048x2048);
  background-size: cover;
  background-color: white;
  
}
.navbar {
  overflow: hidden;
  background-color: #333;
}
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-color: #ddd;
}
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<!--<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Jute</b>Mills</a>
    <! Float links to the right. Hide them on small screens -->
   <!-- <div  class="dropdown">
       <button class="dropbtn">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
      <a  class="w3-bar-item w3-button" class="dropdown"><b>Employee</a>
      <a  class="w3-bar-item w3-button" class="dropdown"><b>Department</a>
      <a  class="w3-bar-item w3-button"><b>Project</a>
      <a  class="w3-bar-item w3-button">Product</a>
      <a  class="w3-bar-item w3-button">Raw Materials</a>
      <a  class="w3-bar-item w3-button">Query</a>
          <a  class="w3-bar-item w3-button">About</a>
    </div>
  </div>
</div> -->
<div class="navbar" class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Jute</b>Mills</a>

  
  
  <div class="dropdown">
    <button class="dropbtn"><b>Employee
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://127.0.0.1:8000/addemployee">Add Data</a>
      <a href="http://127.0.0.1:8000/showemployee">Show Data</a>
      
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn"><b>Department
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://127.0.0.1:8000/addunit">Add Unit</a>
      <a href="http://127.0.0.1:8000/showunit">Show Unit</a>
      
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn"><b>Project
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://127.0.0.1:8000/addproject">Add Project</a>
      <a href="http://127.0.0.1:8000/showproject">Show Project</a>
      
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn"><b>Product
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://127.0.0.1:8000/addproduct">Add Product</a>
      <a href="http://127.0.0.1:8000/showproduct">ShoW Product</a>
      
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn"><b>Raw Materials</p>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://127.0.0.1:8000/addmaterial">Add Material</a>
      <a href="http://127.0.0.1:8000/showmaterial">Show Material</a>
      
    </div>
  </div> 
    <div class="dropdown">
    <button class="dropbtn"><b>Query
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://127.0.0.1:8000/agg">Aggregate</a>
      <a href="http://127.0.0.1:8000/join1">Join</a>
       <a href="http://127.0.0.1:8000/subquery">Subquery</a>
        <a href="http://127.0.0.1:8000/uni">Set Operation</a>
         <a href="http://127.0.0.1:8000/showemployee">Function</a>
      
    </div>
  </div>
</div>


<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="https://media.gettyimages.com/photos/workers-work-in-a-jute-processing-mill-while-sunrays-enter-through-picture-id1056020614?s=2048x2048" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>The Cresent </b></span> <span class="w3-hide-small w3-text-light-grey">Jute Mills</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"> The Different Section of Jute Mills</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Production Section</div>
        <img src="https://media.gettyimages.com/photos/the-ministry-of-textiles-and-jute-organised-the-threeday-programme-of-picture-id928050048?s=2048x2048" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Raw Materials</div>
        <img src="https://media.gettyimages.com/photos/employees-are-working-in-a-juteprocessing-mill-in-narayanganj-on-1-picture-id1055994484?s=2048x2048" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Project Section</div>
        <img src="https://media.gettyimages.com/photos/the-ministry-of-textiles-and-jute-organised-the-threeday-programme-of-picture-id928049750?s=2048x2048" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Employee</div>
        <img src="https://media.gettyimages.com/photos/indian-labourers-work-on-machines-inside-a-jute-mill-at-jagatdal-some-picture-id144864229?s=2048x2048" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Department</div>
        <img src="https://media.gettyimages.com/photos/indian-labourers-work-on-machines-inside-a-jute-mill-at-jagatdal-some-picture-id144864213?s=2048x2048" alt="House" style="width:99%">
      </div>
    </div>
    </div>
  </div>

 


</body>
</html>
