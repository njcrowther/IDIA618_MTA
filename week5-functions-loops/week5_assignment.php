<html>
<head><title>People and Pets</title></head>

<body>
  <h2>Dog Shots Tracker</h2>
  <h3>To use this assignment, format your url as "week5_assignment.php?name="name"&dog="dog"&toy="toy-name"&age="dog-age"&shots="Yes/No"" such as week5_assignment.php?name=Nathan&dog=bobby&toy=squeeker&age=13&shots=no</h3>


<?php
/* Using the $customer array, write a function that displays all of the customers in a table
with their dog and the dog's info. If the dog hasn't had its shots, make that row red.

If you want to try something harder, write a function to check if the dog has had shots and
use its output to decide on row color.

Nathan's Extra Work: Get another customer from URL, add it to array, then output the array
*/



$name = $_GET["name"];
$dog = $_GET["dog"];
$toy = $_GET["toy"];
$age = $_GET["age"];
$shots = $_GET["shots"];

$new_Array = array("name"=>$name,"dog"=>$dog,"toy"=>$toy,"age"=>$age,"shots"=>$shots);

// Test url input
// echo $name . "<br>";
// echo $dog . "<br>";
// echo $age . "<br>";
// echo $shots . "<br>";

$customers = array(
array("name"=>"Josh Buck","dog"=>"Jake","toy"=>"skunk","age"=>"10","shots"=>"Yes"),
array("name"=>"Cora Mcconnell","dog"=>"Emma","toy"=>"camel","age"=>"7","shots"=>"No"),
array("name"=>"Amiya Ramirez","dog"=>"Panda","toy"=>"alpaca","age"=>"1","shots"=>"Yes"),
array("name"=>"Reece Orozco","dog"=>"Sammy","toy"=>"meerkat","age"=>"6","shots"=>"Yes"),
array("name"=>"Kadence Livingston","dog"=>"Marley","toy"=>"puma","age"=>"4","shots"=>"Yes"),
array("name"=>"Rhett Pineda","dog"=>"Bruce","toy"=>"gorilla","age"=>"5","shots"=>"Yes"),
array("name"=>"Lincoln Henry","dog"=>"Annie","toy"=>"oryx","age"=>"8","shots"=>"No"),
array("name"=>"Bailey Everett","dog"=>"Bella","toy"=>"warthog","age"=>"9","shots"=>"Yes"),
array("name"=>"Nathaniel Carter","dog"=>"Lola","toy"=>"zebra","age"=>"2","shots"=>"Yes"),
array("name"=>"Tristian Hanna","dog"=>"Rufus","toy"=>"argali","age"=>"3","shots"=>"No"),
array("name"=>"Natasha Rich","dog"=>"Layla","toy"=>"deer","age"=>"4","shots"=>"No"),
array("name"=>"Dereon Gordon","dog"=>"Shadow","toy"=>"mare","age"=>"3","shots"=>"Yes"),
array("name"=>"Ryland Barron","dog"=>"Bandit","toy"=>"rabbit","age"=>"1","shots"=>"Yes"),
array("name"=>"London Shea","dog"=>"Mac","toy"=>"porpoise","age"=>"9","shots"=>"No"),
array("name"=>"Ansley Hardin","dog"=>"Lucy","toy"=>"waterbuck","age"=>"5","shots"=>"Yes"),
array("name"=>"Adriana Little","dog"=>"Astro","toy"=>"coyote","age"=>"6","shots"=>"Yes"),
array("name"=>"Katelynn Reyes","dog"=>"Samson","toy"=>"muskrat","age"=>"2","shots"=>"Yes"),
array("name"=>"Beau Rangel","dog"=>"Piper","toy"=>"gnu","age"=>"10","shots"=>"No"),
array("name"=>"Demarcus Stafford","dog"=>"Kona","toy"=>"hippopotamus","age"=>"7","shots"=>"Yes"),
array("name"=>"Isabel Acosta","dog"=>"Maverick","toy"=>"dog","age"=>"8","shots"=>"Yes"),
array("name"=>"Tia Mccullough","dog"=>"Bud","toy"=>"lamb","age"=>"5","shots"=>"Yes"),
array("name"=>"Jonas Gomez","dog"=>"Max","toy"=>"lamb","age"=>"9","shots"=>"Yes"),
array("name"=>"Parker Hughes","dog"=>"Chanel","toy"=>"colt","age"=>"4","shots"=>"No"),
array("name"=>"Leland Nolan","dog"=>"Koda","toy"=>"fox","age"=>"2","shots"=>"Yes"),
array("name"=>"Darien Vega","dog"=>"Sandy","toy"=>"octopus","age"=>"10","shots"=>"Yes"));

array_push($customers, $new_Array);

print_table($customers);

function print_table($customers) {
  echo "<table><th>Name</th><th>Dog</th><th>Toy</th><th>Age</th><th>Shots</th>";

  foreach ($customers as $customerInfo) {

    $rowColor = checkForShots($customerInfo['shots']);

    echo "<tr bgcolor='" . $rowColor . "'><td>" . $customerInfo['name'] . "</td>";
    echo "<td>" . $customerInfo['dog'] . "</td>";
    echo "<td>" . $customerInfo['toy'] . "</td>";
    echo "<td>" . $customerInfo['age'] . "</td>";
    echo "<td>" . $customerInfo['shots'] . "</td></tr>";
    // print_r($customerInfo);
    // echo $customerInfo['name'] . "'s dog " . $customerInfo['dog'] . "<br>";


  }
}

function checkForShots($shots) {
  if ($shots == 'No' || $shots == 'no') {
    $rowColor = 'red';
  } else {
    $rowColor = 'green';
  }

  return $rowColor;
}

?>

<h2>Resources</h2>
<ul>
  <li><a href="https://stackoverflow.com/questions/13102489/passing-multiple-variables-to-another-page-in-url">Getting Multiple parameters from url</a></li>
  <li><a href="https://stackoverflow.com/questions/10131802/foreach-for-arrays-inside-of-an-array">Using arrays inside arrays </a></li>
  <li><a href="https://www.w3schools.com/html/html_tables.asp">HTML Tables</a> </li>
  <li><a href="https://www.w3schools.com/tags/att_tr_bgcolor.asp">HTML Table Styling</a></li>
</ul>

</body>
</html>
