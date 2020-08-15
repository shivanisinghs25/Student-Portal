<?php 
// DB credentials.
$host='localhost';
$dbname = 'srms';
$username = 'root';
$password = '123456';
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=localhost;dbname=srms",'root', 123456,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

?>




