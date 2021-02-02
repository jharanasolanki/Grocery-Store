<?php
$servername = "remotemysql.com";
$username = "HCT4UbGiki";
$password = "HCT4UbGiki";
$dbname = "HCT4UbGiki";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  
}
?>