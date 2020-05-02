<?php
  include 'databaseconn.php';

  // Get VALUES
    $id = $_POST['id'];

    


//   $name = $_POST['name'];
//   $dog = $_POST['dog'];
//   $toy = $_POST['toy'];
//   $age = $_POST['age'];
//   $shots = $_POST['shots'];

  // Build Query
  $sqlDelete = "DELETE FROM `customerdog` WHERE `id`= $id;";
  echo $sqlDelete;

  // Run Query
  if ($conn->query($sqlDelete) === TRUE) {
    echo urlencode("Deleted successfully");
  } else {
    echo urlencode("Error: " . $sqlDelete . "<br>" . $conn->error);
  }

  $conn->close();

?>
