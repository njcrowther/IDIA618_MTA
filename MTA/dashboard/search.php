<?php
  include '../databaseconn.php';

  $order = $_POST['order'];

  $query = "SELECT `id`,`timestamp`,`imagePath`,`location`,`issueType`,`notes` FROM `issues` ORDER BY $order;";

  // This function
  // if(!isset($_POST["search"])) {
    // Query for selecting everything in the table
    // $query = "SELECT `id`,`timestamp`,`imagePath`,`location`,`issueType`,`notes` FROM `issues`;";
  // } else if (isset($_POST["search"])) {
    // Get the POST variables
    // $name = $_POST["name"];
    // $dog = $_POST["dog"];

    //
    // $query = "SELECT `name`,`dog`,`shots` FROM `customerdog` WHERE `name`='". $name . "' AND `dog`='". $dog . "' ORDER BY `name`";
  // }

  $queryResult = $conn->query($query);
  $conn->close();

  $rows = array();

  while($r = mysqli_fetch_assoc($queryResult)) {
    $rows[] = $r;
  }

  echo json_encode($rows);
?>