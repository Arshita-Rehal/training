<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname ="demo"; 
$conn = mysqli_connect($servername, 
	$username, $password, $dbname);
if($conn) { 
		echo "success"; 
} 
else { 
		die("Error". mysqli_connect_error()); 
} 
?>	