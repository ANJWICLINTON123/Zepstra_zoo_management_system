<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testing";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if(mysqli_connect_errno()) {  
  die(" Failed to connect with MySQL: ". mysqli_connect_error());  
}
?>