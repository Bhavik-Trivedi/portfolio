<?php 
$host = "localhost";
$username = "rohan999_artify";
$password = "nXlL74wTd3MMoN8w";
$database = "rohan999_artify";

$conn = mysqli_connect($host,$username,$password,$database);

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>