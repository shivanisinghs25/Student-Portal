<?php
session_start();
$conn = new mysqli("localhost","root","123456","multilogin");

$msg="";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = sha1($password);
    $userType = $_POST['userType'];
    $sql = "SELECT * FROM users WHERE username=? AND password=? AND user_type=?"; 
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("sss",$username,$password,$userType);
    $stmt->execute();
    $result = $stmt->get_result();
    $row =$result->fetch_assoc();

    session_regenerate_id();
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['user_type'];
    session_write_close();

    if($result->num_rows==1 && $_SESSION['role']=="student"){
        header("location:studentpage.php");
    }
   
    else if($result->num_rows==1 && $_SESSION['role']=="admin"){
        header("location:mainhome.php");
    }
    else{
        $msg ="<script type='text/javascript'>alert('Username or Password is Incorrect!')</script>";
            }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; width: 30%; height: 30%;}
body, html {
  height: 100%;
  margin: 0;
}

body{/* The image used */
  background-image: url("img1/sp8.jpg");

  /* Full height */
  height: 100%; 
background-attachment: fixed;
            width: 100%;
              background-size: cover;
  position: relative;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}
form{
    border:4px solid white;
    border-radius: 10px;
    margin-bottom: 100px;
    top: 50%;
}

.container {
  padding: 16px;

  
}
.h{
  width: 80%;
}

span.password {
  float: right;
  padding-top: 16px;
}
.cancelbtn a{
  text-decoration: none;
  color: white;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.container{
  width:500px;

  

}

        .text {
  background-color: white;
  color: black;
  font-size: 100px; /* Responsive font size */
  font-weight: bold;
  margin: 0 auto; /* Center the text container */
  padding: 10px;
  width: 75%;
  text-align: center; /* Center text */
  position: absolute; /* Position text */
  left: 50%; /* Position text in the middle */
  top: 10%;
  transform: translate(-50%, -50%); /* Position text in the middle */
  mix-blend-mode: screen; /* This makes the cutout text possible */
}
a{
  font-size: 25px;
}
</style>
</head>
<body>
<div class="text">STUDENT PORTAL</div>
<br><br><br><br><br><br><br><br><br><br><br>

<center>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-4" >
  <div class="imgcontainer">
    <img src="img1/parent.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="username" name="username" title="Enter your username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" title="Enter your password"  required>

     <label for="userType">I'm a :</label>
                    <input type="radio" name="userType" value="student" class="custom-radio" >Student |<input type="radio" name="userType" value="admin" class="custom-radio" >Admin
        
    <button type="submit" name="login">Login</button>
       <h5 class="  text-secondary text-center"><?= $msg; ?></h5>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

 
</form>

</center>


</body>
</html>