<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Biobook - Sign up, Log in, Post </title>
		<link rel="stylesheet" type="text/css" href="css2/photos.css">
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
	
			#left-nav1 {
width: 360px;
float:left;
border-top: 15px solid #ddd;
border-bottom: 15px solid #ddd;


border-radius: 5px;
margin-top:10px;
}

#left-nav1 h2 {
text-shadow: none;
color:black;

}

#left-nav1 table {
width:90%;
margin:auto;
}

#left-nav1 img {
width:60px;
height:60px;
margin:auto;
border:2px solid #CCCCCC;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}

#left-nav1 b {
color:black;
font-size:18px;
}

#left-nav1 b:hover {
color:#ddd;

}

#left-nav1 label {
color:black;
font-size:20px;
text-shadow: none;

}

			#left-nav{
				background-color: white;
				border-radius: 5px;
				border-top: 15px solid #ddd;
				border-bottom: 15px solid #ddd;
				width: 30%;
}
			.user-details h3, h2 {
				color: black;
				text-shadow:none;

			}
			#left-nav1 {
			background-color: white;
				border-radius: 5px;	
				color: black;
			}
			table{
				color: black;
				text-shadow:none;
			}
			.user-details {
width: 200px;
height: 100px;
margin: -50px 0 0 125px;
font-size: 16px;
text-align: center;
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

	

	<div id="container">
	
		<div id="left-nav">
				
				<div class="clip1">
				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
				</div>
				
				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
					<h2><?php echo $username ?></h2>
				</div>
		
<?php
	include("includes/database.php");
			$query=mySQLi_query($conn,"SELECT * from user where user_id='$id' order by user_id DESC") or die(mySQL_error());
			while($row=mySQLi_fetch_array($query)){
				$id = $row['user_id'];
?>

		<div id="left-nav1">

			<h2>Personal Info</h2>
			<table>
				<tr>
					<td><label>Username</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['username']; ?></b></td>
				</tr>
				<tr>
					<td><label>Birthday</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['birthday']; ?></b></td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['gender']; ?></b></td>
				</tr>
				<tr>
					<td><label>Contact</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['number']; ?></b></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['email']; ?></b></td>
				</tr>
				<tr>
					<td><label>Image</label></td>
					<td width="20"></td>
					<td><img src="<?php echo $row['profile_picture']; ?>"></td>
				</tr>
			</table>
<?php
}
?>
		</div>		
				
		</div>
		
		<div id="right-nav">
			<h1>Your Photos</h1>
	<div>
			<form method="post" action="add_photo.php" enctype="multipart/form-data">
				<input type="file" name="image">
				<button style="background-color: blue;"  class="btn-submit-photo" name="Submit" value="Log out">Add Photos</button>
			</form>
	<hr />
	</div>
	

<?php
	include("includes/database.php");
			$query=mySQLi_query($conn,"SELECT * from photos where user_id='$id' ") or die(mySQLi_error());
			while($row=mySQLi_fetch_array($query)){
				$id = $row['photo_id'];
?>

		<div class="photo-select">
			<center>
				<img src="<?php echo $row['location']; ?>">
				<hr>
				<a href="delete_photos.php<?php echo '?id='.$id; ?>" class="btn-delete-photos" style="background-color: blue;">Delete</a>
			</center>
		</div>
		
<?php
}
?>
		</div>

		
	</div>

</body>

</html>