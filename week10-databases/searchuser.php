<?php
  include 'databaseconn.php';

  // This function
  if(!isset($_POST["search"])) {
    // Query for selecting everything in the table
    $query = "SELECT `name`,`dog`,`shots` FROM `customerdog` ORDER BY `name`;";
  } else if (isset($_POST["search"])) {
    // Get the POST variables
    $name = $_POST["name"];
    $dog = $_POST["dog"];

    //
    $query = "SELECT `name`,`dog`,`shots` FROM `customerdog` WHERE `name`='". $name . "' AND `dog`='". $dog . "' ORDER BY `name`";
  }

  $queryResult = $conn->query($query);
  $conn->close();

  $rows = array();

  while($r = mysqli_fetch_assoc($queryResult)) {
    $rows[] = $r;
  }

  echo json_encode($rows);
?>
