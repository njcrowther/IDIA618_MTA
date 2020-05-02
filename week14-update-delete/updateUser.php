<?php
  include 'databaseconn.php';

  // Get VALUES
    $id = $_GET['id'];

  // Build Query
  $sqlUpdate = "SELECT `id`,`name`,`age`,`dog`,`toy`,`shots` FROM `customerdog` WHERE `id`= $id;";

  $queryResult = $conn->query($sqlUpdate);

  //setting up variables
  if ($queryResult->num_rows > 0) {
    //output data of each row
    while($row = $queryResult->fetch_assoc()){
      $userid = $row["id"];
      $name = $row["name"];
      $dog = $row["dog"];
      $toy = $row["toy"];
      $shots = $row["shots"];
      $age = $row["age"];
    }
  }

  $conn->close();

?>
<html>
<head>
	<title>Update Patient</title>
</head>

<body>
  <h1>Update Patient Information</h1>
  <form action="updateUser_process.php" method="post">
  <input name="id" type="hidden" value="<?php echo $userid;?>">
  Owner Name: <input name="name" value="<?php echo $name;?>"><br>
  Dog Name: <input name="dog" value="<?php echo $dog;?>"><br>
  Dog's Favorite Toy: <input name="toy" value="<?php echo $toy;?>"><br>
  Dog's Age: <input name="age" value="<?php echo $age;?>"><br>
  Has Shots?: <select name="shots">
  <option value="yes" <?php if (strtolower($shots) == "yes") { echo "selected"; }?>>Yes</option>
  <option value="no" <?php if (strtolower($shots) == "no") { echo "selected"; }?>>No</option>
  </select><br>
  <input type="submit" value="Submit">
  </form>
</body>
</html>