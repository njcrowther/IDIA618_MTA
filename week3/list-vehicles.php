<?php //Start Session
session_start();
?>

<html>
<body>
  <h1>Vehicles Listing</h1>
  <p>This page shows that we've saved the vehicles array into a session variable and displayed it here.
  </p>
<?php
  echo "<h2>Session Variable Output</h2>";
  print_r($_SESSION);
  echo "<br><br>";
  echo "<h2>List Vehicles</h2>";

  foreach ($_SESSION["vehicles"] as $array) {
    echo "Vehicle ID: $array[vid] "." Type: $array[type]  "." Color: $array[color]<br>";
    foreach ($array as $key => $value) {
      // echo "Vehicle ID: $value"." Type:$value"." Color:$value<br>";
      // echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
    }

    // print($vehicle);
    // echo "<br>";
  }

  // for ($i=0; $i <= 9; $i++) {
  //   $vehicle = $_SESSION["vehicles"];
  //
  //   print($vehicle);
  //   echo "<br>";
  // }
?>



</body>
</html>
