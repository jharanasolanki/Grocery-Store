<?php
$servername = "remotemysql.com";
$username = "HCT4UbGiki";
$password = "WszXABOU7F";
$dbname = "HCT4UbGiki";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}