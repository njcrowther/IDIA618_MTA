<?php
  include '../databaseconn.php';

  // Get VALUES
    $id = $_POST['id'];

  // Build Query
  $sqlDelete = "DELETE FROM `issues` WHERE `id`= $id;";
  echo $sqlDelete;

  // Run Query
  if ($conn->query($sqlDelete) === TRUE) {
    echo urlencode("Deleted successfully");
  } else {
    echo urlencode("Error: " . $sqlDelete . "<br>" . $conn->error);
  }

  $conn->close();

?>
