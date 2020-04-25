<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "MTA"; //make sure your database is named this.

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
  // echo "Connected successfully";
}


?>
