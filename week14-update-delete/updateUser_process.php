<?php
    include 'databaseconn.php';

    // Get VALUES
    $userid = $_POST["id"];
    $name = $_POST["name"];
    $dog = $_POST["dog"];
    $toy = $_POST["toy"];
    $shots = $_POST["shots"];
    $age = $_POST["age"];


  // Build Query
  $sqlUpdate = "UPDATE `customerdog` SET `name`='$name', `dog`='$dog', `toy`='$toy', `shots`='$shots', `age`='$age' WHERE `id`=$userid;";


  // Run Query
//   $result = $conn->query($sqlUpdate);

  if ($conn->query($sqlUpdate) === TRUE) {
    echo urlencode("Updated successfully");
  } else {
    echo urlencode("Error: " . $sqlUpdate . "<br>" . $conn->error);
  }

//   echo $sqlUpdate;
?>

<html>
<head>
<meta http-equiv="refresh" content="0; URL='index.php'"/>
</head>
</html>