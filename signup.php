
<?php
							include ('include/database.php');
							
							if (!isset($_FILES['profile_picture']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['profile_picture']['tmp_name'];
							$image = $_FILES["profile_picture"] ["name"];
							$image_name= addslashes($_FILES['profile_picture']['name']);
							$size = $_FILES["profile_picture"] ["size"];
							$error = $_FILES["profile_picture"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["profile_picture"]["tmp_name"],"upload/" . $_FILES["profile_picture"]["name"]);			
									$location="upload/" . $_FILES["profile_picture"]["name"];
									$user=$_SESSION['id'];
									$update=mysqli_query($conn,"UPDATE user SET profile_picture = '$location' WHERE user_id='$user'");
									
									$update1=mysqli_query($conn,"UPDATE comments SET image = '$location' WHERE user_id='$user'");

									}
										header('location:index.php');
									
									
									}
							}
						?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-color: #f1f1f1;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
 .signupbtn,.cancelbtn {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.signupbtn:hover ,.cancelbtn:hover{
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;

}
form{
	width: 50%;
	background-color: white;

}
table{
	width: 100%;
}


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

</style>
<body>
<center>
<form  method="post" action="signup_form.php" enctype="multipart/form-data" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label><b>First name</b></label></td>
					<td><label><b>Last name</b></label></td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" placeholder="Enter your firstname....." class="form-1" title="Enter your firstname" required /></td>
					<td><input type="text" name="lastname" placeholder="Enter your lastname....." class="form-1" title="Enter your lastname" required /></td>
				</tr>
				<tr>
					<td><label><b>User name</b></label></td>
					<td><label><b>Repeat user name</b></label></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="Enter your username....." class="form-1" title="Enter your username" required /></td>
					<td><input type="text" name="username2" class="form-1" title="Enter your username" required /></td>
				</tr>
				<tr>
				
				</tr>
			</table>
		
		
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label><b>Birthday</b></label></td>
					<td>
					<select name=day style="font-size:18px;" required>
					<?php

					$day=1;
					while($day<=31)
					  {
					  echo "<option> $day
					  </option>";
					  $day++;
					  }
					?>
					</select>
					<select name=month style="font-size:18px;" required>
						<option>January</option>
						<option>Febuary</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
					<select name=year style="font-size:18px;" required>
					<?php
					$year=1901;
					while($year<=2014)
					  {
					  echo "<option> $year
					  </option>";
					  $year++;
					  }
					?>
					</select>
					</td>
				</tr>
				<tr>
					<td><label><b>Gender</b></label></td>
					<td>
					<label><b>Male</b></label><input type="radio" name="gender" value="male" required />
					<label><b>Female</b></label><input type="radio" name="gender" value="female" required />
					</td>
				</tr>
				<tr>
					<td><label><b>Mobile number</b></label></td>
					<td><input type="number" name="number" placeholder="09...." maxlength="13" class="form-2" title="Enter your mobile number"
					 required /></td>
				</tr>
			</table>
		
		
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label><b>Your email address</b></label></td>
					<td><label><b>Repeat email</b></label></td>
				</tr>
				<tr>
					<td><input type="email" name="email" placeholder="Enter your email address....." class="form-1" title="Enter your firstname" required /></td>
					<td><input type="email" name="email2" class="form-1" title="Enter your lastname" required /></td>
				</tr>
				
				<tr>
					<td><label><b>Password</b></label></td>
					<td><label><b>Repeat password</b></label></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Enter your password" class="form-1" title="Enter your username" required /></td>
					<td><input type="password" name="password2" class="form-1" title="Enter your username" required /></td>
				</tr>
				<tr>
					<td><label><b>Profife Picture</b></label></td>
					<td><label><b>Cover Picture</b></label></td>
				</tr>
				<tr>
			<td><input type="file" name="profile_picture" value="profile_picture"></td>
			

<td><input type="submit" value="save" name="profile_picture" /></td>
</tr>
				
				
					
				
			</table>
			 <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
			<div class="clearfix">
	<button type="reset" class="cancelbtn" name="cancel" value="Cancel"> <a href="signin.php" style="text-decoration: none;color: white;">Cancel</a></button>
      <input type="submit" name="submit" value="SignUp"  class="signupbtn" title="Log in" ></>
		
	</div>
		</form>
	</center>
	

</body>

</html>