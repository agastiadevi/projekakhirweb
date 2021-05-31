<?php
$servername = "trunojoyopython.com";
$username = "trunojoy_kuliah";
$password = "unijoyo2021";
$database = "trunojoy_hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>