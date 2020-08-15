<!DOCTYPE html>
<html>

	<head>
		<title>social </title>
		<link rel="stylesheet" type="text/css" href="css/home.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #f1f1f1;
				background-image: none;
				margin: 0
}

.topnav {
  overflow: hidden;
  background-color: blue;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:#0488cd ;
  color: white;
}

.topnav .search-container {
  float: left;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
h2{
	color: black;
	text-shadow: none;
}

</style>
	</head>

<body>
<?php include ('session.php');?>
<div class="topnav">

<a class="" href="home.php" style="margin-left: 300px;">logo</a>
 <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search" style="width: 500px;">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
 
  <a href="timeline.php" style="margin-left: 50px;" title="<?php echo $username ?>"><label>
  	<img style="width: 20px;height: 20px; border-radius: 10px;"src="<?php echo $row['profile_picture'] ?>" >
  	<?php echo $username ?></label></a>
 <a href="home.php">
 	<i class="fa fa-home"></i>Home</a>
  <a href="profile1.php" title="Home">
  	<i class="fa fa-user"></i>Profile</a>
<a href="photos.php" title="Settings">
	<i class="fa fa-picture-o"></i>Photos</a>
<a href="studentpage.php" title="Log out">
	<i class="fa fa-sign-out"></i>Log out</a>
</div>
</center>

<form method="post" enctype="multipart/form-data" style="margin-top: 10px;">
	<h2>Update profile photo</h2>
<input  type="file" name="image">
<input  type="submit" value="save" name="image" />
<?php
							include ('includes/database.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$location="upload/" . $_FILES["image"]["name"];
									$user=$_SESSION['id'];
									$update=mysqli_query($conn,"UPDATE user SET profile_picture = '$location' WHERE user_id='$user'");
									
									$update1=mysqli_query($conn,"UPDATE comments SET image = '$location' WHERE user_id='$user'");

									}
										header('location:home.php');
									
									
									}
							}
						?>
						</form><br><br>

<form method="post" enctype="multipart/form-data">
	<h2>Update Cover photo</h2>
<input type="file" name="image1">
<input type="submit" value="save" name="image1" />
<?php
							include ('includes/database.php');
							
							if (!isset($_FILES['image1']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image1']['tmp_name'];
							$image = $_FILES["image1"] ["name"];
							$image_name= addslashes($_FILES['image1']['name']);
							$size = $_FILES["image1"] ["size"];
							$error = $_FILES["image1"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["image1"]["tmp_name"],"upload/" . $_FILES["image1"]["name"]);			
									$location="upload/" . $_FILES["image1"]["name"];
									$user=$_SESSION['id'];
									$update=mysqli_query($conn,"UPDATE user SET cover_picture = '$location' WHERE user_id='$user'");

									}
										header('location:timeline.php');
									
									
									}
							}
						?>
						</form>

</body>

</html>