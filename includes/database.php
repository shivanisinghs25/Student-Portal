<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$database = "comments";

// Create connection
$conn = mysqli_connect('localhost', 'root', '123456','comments');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

