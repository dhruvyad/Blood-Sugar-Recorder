<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"bsmonitor");

// Check connection
if (!$conn) {
   phpinfo();
   die("Connection failed: " . mysqli_connect_error());
}
#echo "Connected successfully";
?>
