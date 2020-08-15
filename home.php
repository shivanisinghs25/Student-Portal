<?php
function time_stamp($session_time) 
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"$seconds seconds ago"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     echo"one minute ago"; 
    }
   else
   {
   echo"$minutes minutes ago"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   echo"one hour ago";
   }
  else
  {
  echo"$hours hours ago";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   echo"one day ago";
   }
  else
  {
  echo"$days days ago";
  }


  
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   echo"one week ago";
   }
  else
  {
  echo"$weeks weeks ago";
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   echo"one month ago";
   }
  else
  {
  echo"$months months ago";
  }
 
   
}

else
{
if($years==1)
   {
   echo"one year ago";
   }
  else
  {
  echo"$years years ago";
  }

}
 
} 

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Homes</title>
		<link rel="stylesheet" type="text/css" href="css2/home.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		>
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
#right-nav {
float:right;
width:785px;
height: 300px;
background-color:#ddd;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;

margin-top:10px;
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
.user-comment-name img {
width:70px;
height:70px;
margin-top:10px;
border:3px solid #CCCCCC;
border-radius:50px;
}

.time-comment {
font-size:15px;
color:#000000;
margin-left:15px;
}

.comment {
font-size:18px;
color:#000000;
text-indent:15px;
margin-top:5px;
margin-bottom:5px;
}

.picture-comment img {
width:10%;
height:10%;
}

.comment-text {	
border:1px solid #0bacff;
font-size:19px;
text-indent:5px;
width:75%;
}



.comment-display {
width:100%;
background-color:#ffffff;
border:2px solid #cccccc;
margin-top:10px;
}
.comment-area {
width:100%;
background-color:white;
border:1px solid #0bacff;

padding:3px;
margin-top:10px;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
-o-border-radius:5px;
}


.profile-pics img {
width:70px;
height:70px;

-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 50px;
}
.comment-area img {
width:10%;
height:10%;
border-radius: 50px;}
.post-content img {

width:100%;
height:50%;
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
	<div class="niv">
		<div id="left-nav">
				
				<div class="clip1">

				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
				</div>
				
				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
					<h2><?php echo $username ?></h2>
				</div>
		</div>
		</div>
		
		
		<div id="right-nav">
			<h1 style="margin-left: 5px;">Update Status</h1>
	<div>
		<div class="text">
			<form method="post" action="po
			st.php" enctype="multipart/form-data" >
				<textarea style="border:none; width: 100%;" placeholder="Whats on your mind?" name="content" class="post-text" required></textarea>
				<input type="file" name="image">
				<button class="btn-share" name="Submit" value="Log out" style="background-color: blue;border-radius: 10px; border:none; padding: 5px; margin-top: 3px; margin-right: 5px;">Post</button>
			</form>
		</div>
	</div>
	
		</div>
		
<?php
	include("includes/database.php");
			$query=mySQLi_query($conn,"SELECT * from user where user_id='$id' order by user_id DESC") or die(mySQLi_error());
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
		</div>
<?php
}
?>
		

<?php
	include("includes/database.php");
			$query=mySQLi_query($conn,"SELECT * from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC") or die(mySQLi_error());
			while($row=mySQLi_fetch_array($query)){
				$posted_by = $row['firstname']." ".$row['lastname'];
				$location = $row['post_image'];
				$profile_picture = $row['profile_picture'];
				$content=$row['content']; 
				$post_id = $row['post_id'];
				$time=$row['created'];	
?>
		<div id="right-nav1" style="background-color: #ddd; ">
			<div class="profile-pics"  >
			<img src="<?php echo $profile_picture ?>">
			<b><?php echo $posted_by ?></b>
			<strong><?php echo $time = time_stamp($time); ?></strong>
			</div>
		<br />
			<div class="post-content" style="background-color: white; width: 100%;border:none;">
				<div class="delete-post">
				<a href="delete_post.php<?php echo '?id='.$post_id; ?>" title="Delete your post"><button style="background-color: blue;" class="btn-delete">X</button></a>
				</div>
			<p><?php echo $row['content']; ?></p>
		<center>
			<img src="<?php echo $location ?>">
		</center>
		</div>

<?php
	include("includes/database.php");
			$comment=mySQLi_query($conn,"SELECT * from comments where post_id='$post_id' order by post_id DESC") or die(mySQLi_error());
			while($row=mySQLi_fetch_array($comment)){
			$comment_id=$row['comment_id'];
			$content_comment=$row['content_comment'];
				$time=$row['created'];	
			$post_id=$row['post_id'];
			$user=$_SESSION['id'];
			
?>			
			<div class="comment-display"<?php echo $comment_id ?>>
					<div class="delete-post">
					<a href="delete_comment.php<?php echo '?id='.$comment_id; ?>" title="Delete your comment"><button style="background-color: blue;" class="btn-delete">X</button></a>
					</div>
				<div class="user-comment-name"><img src="<?php echo $row['image']; ?>">&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?><b class="time-comment"><?php echo $time = time_stamp($time); ?></b></div>
				<div class="comment"><?php echo $row['content_comment']; ?></div>
			
			</div>
			<br />

<?php
}
?>
			

		 <form  method="POST" action="comment.php">			
			<div class="comment-area">
			
						<?php $image=mysqli_query($conn,"select * from user where user_id='$id'")or die(mysql_error());
							while($row=mysqli_fetch_array($image)){
							

							?>
						<img src="<?php echo $row['profile_picture']; ?>" width="50" height="50">
						<?php } ?>
			
			<input type="text" name="content_comment" placeholder="Write a comment..." class="comment-text">
			<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
			<input type="hidden" name="user_id" value="<?php echo $firstname . ' ' . $lastname  ?>">
			<input type="hidden" name="image" value="<?php echo $profile_picture  ?>">
			<input type="submit" name="post_comment" value="Enter" class="btn-comment">
			
			</div>
		</form>

			
		</div>
	<?php
	}
	?>
	
		
	</div>

</body>

</html>