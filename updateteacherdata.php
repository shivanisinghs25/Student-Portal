<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Teachers Forms</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

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
$dbname="jack";
$id="";
$name="";
$email="";
$phone="";
$state="";
$qualification="";
$branch="";
$gender="";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//connect to mysql database
try{
	$conn =mysqli_connect('localhost','root','123456','jack');
}catch(MySQLi_Sql_Exception $ex){
	echo("error in connecting");
}
//get data from the form
function getData()
{
	$data = array();
$data[0]=$_POST['id'];
	$data[1]=$_POST['name'];
	$data[2]=$_POST['email'];
	$data[3]=$_POST['phone'];
  $data[4]=$_POST['state'];
  $data[5]=$_POST['qualification'];
  $data[6]=$_POST['branch'];
    $data[7]=$_POST['gender'];
  
	return $data;
}
//search
if(isset($_POST['search']))
{
	$info = getData();
	$search_query="SELECT * FROM slack WHERE id = '$info[0]'";
	$search_result=mysqli_query($conn, $search_query);
		if($search_result)
		{
			if(mysqli_num_rows($search_result))
			{
				while($rows = mysqli_fetch_array($search_result))
				{
					$id = $rows['id'];
					$name = $rows['name'];
					$email = $rows['email'];
					$phone = $rows['phone'];
          $state = $rows['state'];
          $qualification = $rows['qualification'];
          $branch = $rows['branch'];
           $gender = $rows['gender'];
					
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
	$insert_query="INSERT INTO `slack`(`name`,  `email`, `phone`,`state`,`qualification`,`branch`,`gender`) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]')";
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
	$delete_query = "DELETE FROM `slack` WHERE id = '$info[0]'";
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
	$update_query="UPDATE `slack` SET `name`='$info[1]',email='$info[2]',phone='$info[3]',state='$info[4]',qualification='$info[5]',branch='$info[6]',gender='$info[7]' WHERE id = '$info[0]'";
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
<div class="col-md-6" style="margin-left: 500px;">
<ul class="breadcrumb">
<li><a href="finaladmin.php"><i class="fa fa-home"></i> Home</a>
</li>
<li class="act">Faculty Data</li>
<li style="float: right;"><a href="logout.php"><i class="fa fa-sign-out"></i>Log out</a></li>
</ul>
</div><br><br>

	

	<div class="container-fluid">
	  <div class="row">
	    <div class="col-lg-4">

<form method ="post"   action="">
	<h1>ID Number (Use to Search Teachers data)</h1>
  <input type="number" name="id"  class="form-control" placeholder="ID No. /Automatic Number Genrates" value="<?php echo($id);?>">
		<h1>Teacher Name</h1>
	<input type="text" name="name" class="form-control" placeholder="Enter Teacher Name" value="<?php echo($name);?>" >
<h1>Email</h1>
	<input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo($email);?>" >
  <div class="form-group row">
  <div class="col-xs-6">
	<h1>Phone (10-digit)</h1>
	<input type="tel" pattern="^\d{10}$" class="form-control" name="phone"  placeholder="10 digit Phone number" value="<?php echo($phone);?>">
</div>
  <div class="col-xs-6">
		<h1>Select State</h1>
  <input type="text" name="state" class="form-control" placeholder="State" value="<?php echo($state);?>" >
</div>
</div>
<div class="form-group row">
<div class="col-xs-6">
	<h1>Qualification</h1>
<input type="text" name="qualification" class="form-control" placeholder="qualification" value="<?php echo($qualification);?>" >
</div>
<div class="col-xs-6">
	<h1>field</h1>
 <input type="text" name="branch" class="form-control" placeholder="branch" value="<?php echo($branch);?>" >
</div>

</div>

	<h1>Gender</h1>
<input type="text" name="gender" class="form-control" placeholder="gender" value="<?php echo($gender);?>" >

    <div class="form-group row">
    <hr/>
    <div class="col-xs-4">
        <input type="submit" class="btn btn-primary btn-block btn-lg" name="search" value="Find">
      </div>
      <div class="col-xs-4">
          <input type="submit" class="btn btn-warning btn-block btn-lg" name="update" value="Update">
        </div>
        <div class="col-xs-4">
    <input type="submit" class="btn btn-danger btn-block btn-lg" name="delete" value="Delete">
  </div>
</div>

</form>
</div>

    <div class="col-lg-8">
			<h2>Teacher Data Update | Delete</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "jack";

// Create connection
$conn = new mysqli('localhost', 'root', '123456', 'jack');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,name,email,phone,state,qualification,branch,gender FROM slack";
$result = $conn->query($sql);

echo "<table border='1'id='example' class='display table table-striped table-bordered' cellspacing='0' width='100%'>
<tr>
<th>Search ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>State</th>
<th>Qualification</th>
<th>branch</th>
<th>gender</th>


</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['qualification'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";


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