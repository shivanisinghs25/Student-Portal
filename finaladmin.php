<!DOCTYPE html>
<html>
<title>admin page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
  body {
  font-family: 'Be Vietnam',sans-serif;
  font-size: 17px;
}
h1{
  background-color: ;
  /* Fixed sidenav, full height */
}
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  padding-top: 20px;
}


/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 18px;

  color: black;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover{
  color:white;
  


}



.dropdown-container {
  display: none;
  background-color: #f1f1f1;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */

/* Some media queries for responsiveness */

</style>
<body>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
 <div class="sidenav">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
   <button class="dropdown-btn w3-button w3-large">Student Profile
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="profile.php">Add Profile</a>
    <a href="updateprofile.php">Manage Profie</a>
   
  </div>
   <button class="dropdown-btn w3-button w3-large">Faculty Profile
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="teacher.php">Add Faculty</a>
    <a href="updateteacherdata.php">Manage Faculty</a>
    
  </div>

   <button class="dropdown-btn w3-button w3-large">Student Classes
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <div><a href="createclass.php">Create Class</a></div>
    <a href="manageclass.php">Manage Class</a>
    
  </div>
   <button class="dropdown-btn w3-button w3-large">Subjects 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="createsubject.php">Create Subjects</a>
    <a href="managesubject.php">Manage Subjects</a>
    <a href="addsubjectcombination">Add Subject Combination</a>
    <a href="managesubjectcombination">Manage Subject Combination</a>
  </div>
   <button class="dropdown-btn w3-button w3-large">Student 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="addstudent.php">Add Student</a>
    <a href="managestudent.php">Manage Student</a>
    
  </div>
  <button class="dropdown-btn w3-button w3-large ">Result 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="addresult.php">Add Result</a>
    <a href="manageresults.php">Manage Result</a>
    
  </div>
  <a href="upload download/index.php" w3-button w3-large ><button class="dropdown-btn w3-button w3-large ">Notes</button></a>
    <button class="dropdown-btn w3-button w3-large ">Password 
    <i class="fa fa-caret-down"></i>
  </button>

  

<div class="dropdown-container">
  <a href="changepassword.php" w3-button w3-large>Admin Change Password</a>
</div>
 <a href="mainhome.php" w3-button w3-large ><button class="dropdown-btn w3-button w3-large ">Logout</button></a>


</div>
 
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Admin Page</h1>
  </div>
</div>

<img src="img1/bg-01.jpg" alt="Car" style="width:100%">



</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "16%";
  document.getElementById("mySidebar").style.width = "13%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html>
