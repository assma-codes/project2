<?php

$servername = "localhost";
$username = "assma";
$password = "123";
$dbname = "book-store";
//create connection_aborted
$conn = mysqli_connect($servername,$username,$password,$dbname);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
