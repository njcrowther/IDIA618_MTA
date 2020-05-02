<?php
  include '../databaseconn.php';

  // Get VALUES
  $imagePath = "/test/image/path";
  $location = $_POST['location'];
  $issueType = $_POST['issueType'];
  $notes = "Some notes about the issue";


  
  
  // Build Query
  $sqlAdd = "INSERT INTO issues (imagePath,location,issueType,notes) VALUES ('" . $imagePath . "','" . $location . "','" . $issueType . "','" . $notes . "');";

  //Testing
  // echo urlencode("sqlAdd is: " . $sqlAdd);

  echo urlencode("Hello World: addIssue.php");
  // Run Query
  if ($conn->query($sqlAdd) === TRUE) {
    echo urlencode("New record created successfully");
  } else {
    echo urlencode("Error: " . $sqlAdd . "<br>" . $conn->error);
  }

  $conn->close();

?>