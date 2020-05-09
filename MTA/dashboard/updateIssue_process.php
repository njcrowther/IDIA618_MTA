<?php
    include '../databaseconn.php';

    // Get VALUES
    $id = $_POST["row-id"];
    $notes = $_POST["notes"];
   


  // Build Query
  $sqlUpdate = "UPDATE `issues` SET `notes`='$notes' WHERE `id`=$id;";

//   $sqlUpdate = "UPDATE `customerdog` SET `name`='$name', `dog`='$dog', `toy`='$toy', `shots`='$shots', `age`='$age' WHERE `id`=$userid;";


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
<meta http-equiv="refresh" content="0; URL='dashboard_page.php'"/>
</head>
</html>