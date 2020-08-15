<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Forms</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
body{
    font-family: Courgette;
}
.submit{
  background-color: purple;
  color:white;
  text-size:24px;
  padding: 6px;
  border-radius: 5px;
  border:1px solid white;
  font-size: 24px;
}
.submit:hover{
  background-color: white;
  color: purple;
  box-shadow: 0px 0px 20px white;
}
h1{
	font-size: 14px;
}

td,th{
  padding: 4px;
  text-align: center;
}
</style>
</head>
<?php
$servername = "localhost";
$username="root";
$password="123456";
$dbname="hack";
$id="";
$name="";
$fname="";
$email="";
$phone="";
$state="";
$qualification="";
$branch="";
$rollno="";
$gender="";
$birth="birth";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//connect to mysql database
try{
	$conn =mysqli_connect('localhost','root','123456','hack');
}catch(MySQLi_Sql_Exception $ex){
	echo("error in connecting");
}
//get data from the form
function getData()
{
	$data = array();

	$data[1]=$_POST['name'];
	$data[2]=$_POST['fname'];
	$data[3]=$_POST['email'];
	$data[4]=$_POST['phone'];
  $data[5]=$_POST['state'];
  $data[6]=$_POST['qualification'];
  $data[7]=$_POST['branch'];
  $data[8]=$_POST['rollno'];
  $data[9]=$_POST['gender'];
	$data[10]=$_POST['birth'];
	return $data;
}
//search
if(isset($_POST['search']))
{
	$info = getData();
	$search_query="SELECT * FROM smash WHERE id = '$info[0]'";
	$search_result=mysqli_query($conn, $search_query);
		if($search_result)
		{
			if(mysqli_num_rows($search_result))
			{
				while($rows = mysqli_fetch_array($search_result))
				{
					$id = $rows['id'];
					$name = $rows['name'];
					$fname = $rows['fname'];
					$email = $rows['email'];
					$phone = $rows['phone'];
          $state = $rows['state'];
          $qualification = $rows['qualification'];
          $branch = $rows['branch'];
          $rollno = $rows['rollno'];
          $gender = $rows['gender'];
					$birth = $rows['birth'];

				}
			}else{
				echo("no data are available");
			}
		} else{
			echo("result error");
		}

}
//insert
if(isset($_POST['insert'])){
	$info = getData();
	$insert_query="INSERT INTO `smash`(`name`, `fname`, `email`, `phone`,`state`,`qualification`,`branch`,`rollno`,`gender`,`birth`) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]')";
	try{
		$insert_result=mysqli_query($conn, $insert_query);
		if($insert_result)
		{
			if(mysqli_affected_rows($conn)>0){
				echo("data inserted successfully");

			}else{
				echo("data are not inserted");
			}
		}
	}catch(Exception $ex){
		echo("error inserted".$ex->getMessage());
	}
}
//delete
if(isset($_POST['delete'])){
	$info = getData();
	$delete_query = "DELETE FROM `smash` WHERE id = '$info[0]'";
	try{
		$delete_result = mysqli_query($conn, $delete_query);
		if($delete_result){
			if(mysqli_affected_rows($conn)>0)
			{
				echo("data deleted");
			}else{
				echo("data not deleted");
			}
		}
	}catch(Exception $ex){
		echo("error in delete".$ex->getMessage());
	}
}
//edit
if(isset($_POST['update'])){
	$info = getData();
	$update_query="UPDATE `smash` SET `name`='$info[1]',fname='$info[2]',email='$info[3]',phone='$info[4]',state='$info[5]',qualification='$info[6]',branch='$info[7]',rollno='$info[8]',rollno='$info[9]',birth='$info[10]' WHERE id = '$info[0]'";
	try{
		$update_result=mysqli_query($conn, $update_query);
		if($update_result){
			if(mysqli_affected_rows($conn)>0){
				echo("data updated");
			}else{
				echo("data not updated");
			}
		}
	}catch(Exception $ex){
		echo("error in update".$ex->getMessage());
	}
}

?>
<body>

<center><h1 style="font-size: 40px;">Enter Student Data</h1></center>
<div class="row breadcrumb-div"  >
<div class="col-md-6" style="margin-left: 500px;">
<ul class="breadcrumb">
<li><a href="finaladmin.php"><i class="fa fa-home"></i> Home</a>
</li>
<li class="act">Student Data</li>
<li style="float: right;"><a href="logout.php"><i class="fa fa-sign-out"></i>Log out</a></li>
</ul>
</div><br><br>
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-lg-4">

<form method ="post"   action="">
	<label>ID Number (Use to Search Student data)</label><br>
  <input type="number" name="id"  class="form-control" placeholder="ID No. /Automatic Number Genrates" value="<?php echo($id);?>" disabled>
	<div class="form-group row">
	<div class="col-xs-6">
		<h1>Student Name</h1>
	<input type="text" name="name" class="form-control" placeholder="Enter Student Name" value="<?php echo($name);?>" required>
</div>
<div class="col-xs-6">
	<h1>Father Name</h1>
	<input type="text" name="fname" class="form-control" placeholder="Enter Father Name" value="<?php echo($fname);?>" required>
</div>
</div>
<h1>Email</h1>
	<input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo($email);?>" required>
	<h1>Phone (10-digit)</h1>
	<input type="tel" pattern="^\d{10}$" class="form-control" name="phone"  placeholder="10 digit Phone number" value="<?php echo($phone);?>">
	<div class="form-group row">
	<div class="col-xs-6">
		<h1>Select State</h1>
  <select name="state" class="form-control" value="<?php echo($state);?>">
    <option value="JAMMU and KASHMIR">JAMMU and KASHMIR</option>
    <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
    <option value="PUNJAB">PUNJAB</option>
    <option value="UTTARAKHAND">UTTARAKHAND</option>
    <option value="HARYANA">HARYANA</option>
    <option value="UTTAR PRADESH">UTTAR PRADESH</option>
      <option value="RAJASTHAN">RAJASTHAN</option>
      <option value="GUJRAT">GUJRAT</option>
      <option value="MADHYA PRADESH">MADHYA PRADESH</option>
      <option value="BIHAR">BIHAR</option>
      <option value="JHARKHAND">JHARKHAND</option>
      <option value="GANGTOK">GANGTOK</option>
        <option value="KOLKATA">KOLKATA</option>
        <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
        <option value="ASSAM">ASSAM</option>
        <option value="MEGHALAYA">MEGHALAYA</option>
        <option value="NAGALAND">NAGALAND</option>
        <option value="MANIPUR">MANIPUR</option>
          <option value="MIZORAM">MIZORAM</option>
          <option value="AIZAWL">AIZAWL</option>
          <option value="AGARTALA">AGARTALA</option>
          <option value="CHHATTISGARH">CHHATTISGARH</option>
          <option value="MAHARASHTRA">MAHARASHTRA</option>
          <option value="ODISHA">ODISHA</option>
          <option value="GOA">GOA</option>
          <option value="KARNATAKA">KARNATAKA</option>
          <option value="ANDHARA PRADESH">ANDHARA PRADESH</option>
          <option value="KERALA">KERALA</option>
          <option value="TAMIL NADU"></option>

  </select>
</div>
<div class="col-xs-6">
	<h1>Qualification</h1>
<select name="qualification" class="form-control" value="<?php echo($qualification);?>">
    <option value="10th with above 75%">10th with above 75%</option>
    <option value="+2 with above 75%">+2 with above 75%</option>
    <option value="10th %age between 50% to 75%">10th %age between 50% to 75%</option>
    <option value="+2 %age between 50% to 75%">+2 %age between 50% to 75%</option>
  </select>
</div>
</div>
<div class="form-group row">
<div class="col-xs-6">
	<h1>Branch and Semester</h1>
 <select name="branch" class="form-control" value="<?php echo($branch);?>">
    <option value="Branch CSE 1st sem">Branch CSE 1st sem</option>
    <option value="Branch CSE 2nd sem">Branch CSE 2nd sem</option>
    <option value="Branch CSE 3rd sem">Branch CSE 3rd sem</option>
    <option value="Branch CSE 4th sem">Branch CSE 4th sem</option>
    <option value="Branch CSE 5th sem">Branch CSE 5th sem</option>
    <option value="Branch CSE 6th sem">Branch CSE 6th sem</option>
  </select>
</div>
<div class="col-xs-6">
	<h1>Roll No</h1>
  <input type="number" class="form-control" name="rollno" placeholder="Enter the Roll no" max="1000" value="<?php echo($rollno);?>" required>
</div>
</div>
<div class="form-group row">
<div class="col-xs-6">
	<h1>Gender</h1>
  <select name="gender" class="form-control" value="<?php echo($gender);?>">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
</div>
<div class="col-xs-6">
	<h1>Select Birth Year</h1>
 <select name="birth" class="form-control">
      <option value="1999">Year</option>
      <option>1999</option>
      <option>1998</option>
			<option>1997</option>
      <option>1996</option>
			<option>1995</option>
      <option>1994</option>
			<option>1993</option>
      <option>1992</option>
			<option>1991</option>
			<option>1990</option>
    </select>
</div>
</div>

	<div>
		<input type="submit" class="btn btn-success btn-block btn-lg" name="insert" value="Add">
    <a href="http://localhost/sp/updateprofile.php"><button class="btn btn-info btn-block btn-lg">Update | Delete | Find</button></a>


	</div>
</form>
</div>

    <div class="col-lg-8">
			<h2>Student Data</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "hack";

// Create connection
$conn = new mysqli('localhost', 'root', '123456', 'hack');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,name,fname,email,phone,state,qualification,branch,rollno,gender,birth FROM smash";
$result = $conn->query($sql);

echo "<table border='1' id='example' class='display table table-striped table-bordered' cellspacing='0' width='100%'>
<tr>
<th>Search ID</th>
<th>Name</th>
<th>Father Name</th>
<th>Email</th>
<th>Phone</th>
<th>State</th>
<th>Qualification</th>
<th>branch</th>
<th>roll no</th>
<th>gender</th>
<th>birth</th>

</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['qualification'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['rollno'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['birth'] . "</td>";

echo "</tr>";


    }
} else {
    echo "0 results";
}

$conn->close();
?>
</div>
</div>
</body>
</html>