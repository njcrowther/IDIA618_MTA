<?php
  include 'databaseconn.php';

  // Get VALUES
  $location = $_POST['location'];
  $type = $_POST['issueType'];

  //Testing
//   echo urlencode("Location is: " . $location . ". Type is: " . $type);
echo urlencode("Hello World");
  
  // Build Query
//   $sqlAdd = "INSERT INTO customerdog (name,dog,toy,age,shots) VALUES ('" . $name . "','" . $dog . "','" . $toy . "','" . $age . "','" . $shots . "');";

  // Run Query
//   if ($conn->query($sqlAdd) === TRUE) {
//     echo urlencode("New record created successfully");
//   } else {
//     echo urlencode("Error: " . $sqlAdd . "<br>" . $conn->error);
//   }

//   $conn->close();

?>
