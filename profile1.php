<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Biobook - Sign up, Log in, Post </title>
		<link rel="stylesheet" type="text/css" href="css2/profile.css">
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

.profile-pics {
position:relative;

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
				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"><button style="background-color: blue; border:none;padding: 3px;">Update Picture</button></a>
				
				
				</div>


				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
					<h2><?php echo $username ?></h2>
				</div>
		</div>
		
		
		
		<div id="right-nav">
			
				<h1>Personal Information</h1>
			<hr />
			<br />
			<?php
			include('includes/database.php');

			$result=mysqli_query($conn,"SELECT * FROM user where user_id='$id' ");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['user_id'];	
				echo " <div class='info-user'>";
				echo " <div>";
				echo " <label>Firstname</label>&nbsp;&nbsp;&nbsp;<b>".$test['firstname']."</b>";
				echo "</div> ";
				echo "<hr /> ";		
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Lastname</label>&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['lastname']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Username</label>&nbsp;&nbsp;&nbsp;<b>".$test['username']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Birthday</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['birthday']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['gender']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['number']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";	
				echo "</div> ";
				echo "<br /> ";		
				echo " <div class='edit-info'>";
				echo " <a href ='edit_profile.php?user_id=$id'><button>Edit Profile</button></a>";
				echo "</div> ";
				echo "<br /> ";	
				echo "<br /> ";	
			}
			?>
			
		</div>

	
		</div>
		

	
		
	</div>

</body>

</html>