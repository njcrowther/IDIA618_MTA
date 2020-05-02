<?php
  include 'databaseconn.php';

  // Get VALUES
  $name = $_POST['name'];
  $dog = $_POST['dog'];
  $toy = $_POST['toy'];
  $age = $_POST['age'];
  $shots = $_POST['shots'];

  // Build Query
  $sqlAdd = "INSERT INTO customerdog (name,dog,toy,age,shots) VALUES ('" . $name . "','" . $dog . "','" . $toy . "','" . $age . "','" . $shots . "');";

  // Run Query
  if ($conn->query($sqlAdd) === TRUE) {
    echo urlencode("New record created successfully");
  } else {
    echo urlencode("Error: " . $sqlAdd . "<br>" . $conn->error);
  }

  $conn->close();

?>
