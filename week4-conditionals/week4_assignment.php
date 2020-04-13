<html>
<head><title>Driving Ages</title></head>

<body>
  <h2>Are they old enough to drive?</h2>
  <h3>To use this assignment, format your url as "week4_assignment.php?driver=<array-position>" such as week4_assignment.php?driver=3</h3>

<?php
$whichdriver = $_GET["driver"];

$countries = array(
array("name" => "Australia", "driving_age" => 17),
array("name"=>"Ethiopia","driving_age"=>14),
array("name"=>"Russia","driving_age"=>18),
array("name"=>"Canada","driving_age"=>16),
array("name"=>"United States","driving_age"=>16));

$drivers = array(
array("name"=>"Waylon Dalton","country"=>"Australia","age"=>15),
array("name"=>"Justine Henderson","country"=>"United States","age"=>16),
array("name"=>"Abdullah Lang","country"=>"Australia","age"=>42),
array("name"=>"Marcus Cruz","country"=>"Ethiopia","age"=>14),
array("name"=>"Thalia Cobb","country"=>"Russia","age"=>18),
array("name"=>"Mathias Little","country"=>"Russia","age"=>18),
array("name"=>"Angela Walker","country"=>"United States","age"=>21),
array("name"=>"Joanna Shaffer","country"=>"Canada","age"=>12));

$canDrive = $drivers[$whichdriver]["name"] . " can drive in ";
$cantDrive = $drivers[$whichdriver]["name"] . " CANNOT drive in ";
// echo $canDrive . "<br>";
// echo $cantDrive. "<br>";

//Determine which countries they can drive in.
// $can = 0;
// $cant = 0;
$i = 0;
$canCountries = array();
$cantCountries = array();
foreach ($countries as $key => $value) {
  echo $countries[$i]["name"] . "'s driving age is " . $countries[$i]["driving_age"] . "<br>";
  echo $drivers[$whichdriver]["name"] . "'s age is " . $drivers[$whichdriver]["age"] . "<br>";

  if ($drivers[$whichdriver]["age"] >= $countries[$i]["driving_age"]) {
    // echo "Can Drive!<br>";
    // $canDrive .= $countries[$i]["name"] . ", ";
    // echo $countries[$i]["name"] . "<br>";
    array_push($canCountries, $countries[$i]["name"]);
    // $can++;
  }
  else {
    // echo "Can't Drive!";
    // $cantDrive .= $countries[$i]["name"] . ", ";
    array_push($cantCountries, $countries[$i]["name"]);
    // $cant++;
  }
  $i++;
}

//Build Output Strings
$i = 0;
//Countries they CAN drive in
foreach ($canCountries as $value) {
  if (count($canCountries) == 1) {
    $canDrive .= $canCountries[$i];
  }
  elseif ($i < count($canCountries) && (($i+1) != count($canCountries))) {
    $canDrive .= $canCountries[$i] . ", ";
  }
  elseif ($i < count($canCountries) && (($i+1) == count($canCountries))) {
    $canDrive .= "and " . $canCountries[$i];
  }
  $i++;
}


//Countries they CANNOT drive in
$i = 0;
foreach ($cantCountries as $value) {
  if (count($cantCountries) == 1) {
    $cantDrive .= $cantCountries[$i];
  }
  elseif ($i < count($cantCountries) && (($i+1) != count($cantCountries))) {
    $cantDrive .= $cantCountries[$i] . ", ";
  }
  elseif ($i < count($cantCountries) && (($i+1) == count($cantCountries))) {
    $cantDrive .= "and " . $cantCountries[$i];
  }
  $i++;
}


//Create the output strings
// echo "can = " . $can . "<br>";
// $i = 0;
// $canStop = $can-1;
// $cantStop = --$cant;
// // echo "can - 1 = " . --$can . "<br>";
// echo "can = " . $canStop . "<br>";
//
// foreach ($countries as $key => $value) {
//   echo "i=".$i."<br>";
//
//
//   if ($drivers[$whichdriver]["age"] >= $countries[$i]["driving_age"] && ($i < $canStop || ($i == 0 && $canStop == 0))) {
//     echo "Can Drive!";
//     $canDrive .= $countries[$i]["name"] . ", ";
//   }
//   else if ($drivers[$whichdriver]["age"] >= $countries[$i]["driving_age"] && $i == $canStop) {
//     echo "Can Drive!";
//     $canDrive .= "and " . $countries[$i]["name"];
//   }
//   else if ($drivers[$whichdriver]["age"] < $countries[$i]["driving_age"] && $i < $cantStop) {
//     // echo "Can't Drive!";
//     $cantDrive .= $countries[$i]["name"] . ", ";
//   }
//   else if ($drivers[$whichdriver]["age"] < $countries[$i]["driving_age"] && $i == $cantStop) {
//     $cantDrive .= "and " . $countries[$i]["name"];
//   }
//
//   $i++;
// }

$outputString = $canDrive . "<br>" . $cantDrive;
echo "<h5>".$outputString."</h5>";
/*write conditionals that checks ages to the country requirements and outputs if that person can or cannot drive.

Only output one sentence but make sure if you change the array index value, it still works

For example $drivers[7]: Joanna Shaffer is too young to drive in Canada. (*video says Australia here...sorry)
Example 2 $drivers[2]: Abdullah Lang is old enough to drive in Australia.

You can use brute force with lots of if/thens or you use both arrays to make it super simple. Whatever you can do.

Oh, BTW, this is a long comment. They are useful as you code.
*/

//here is one part to get you started:
// $whichdriver = 2;


// echo $drivers[$whichdriver]["name"] . " is old enough to drive in " . $drivers[$whichdriver]["country"] . ".";


?>

</body>

</html>
