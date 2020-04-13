<?php //Start Session
session_start();
?>

<html>
<body>
	<h1>Save Array to Session and Display</h1>
	<p>This project tests creating an array on one page, saving it to session, and displaying it on another page. Click "List Vehicles" to see it in action!</p>
	<form action="list-vehicles.php" method="post">
		<input type="submit" value="List Vehicles">
	</form>

	<!-- <form action="printSingleArray()" method="post">
		Vehicle ID: <input type="number" name="vid"><br>
		Vehicle Type: <input type="text" name="vehicle-type"><br>
		Vehicle Color: <input type="text" name="vehicle-color"><br>
		<input type="submit">
	</form> -->

<?php
$vehicles = array(array('vid' => '1', 'type' => 'ford explorer', 'color' => 'red'),
									array('vid' => '2', 'type' => 'bus', 'color' => 'yellow'),
									array('vid' => '3', 'type' => 'utility truck', 'color' => 'white'),
									array('vid' => '4', 'type' => 'fire engine', 'color' => 'red'),
									array('vid' => '5', 'type' => 'train', 'color' => 'blue'),
									array('vid' => '6', 'type' => 'police car', 'color' => 'white'),
									array('vid' => '7', 'type' => 'utility truck', 'color' => 'grey'),
									array('vid' => '8', 'type' => 'utility truck', 'color' => 'white'),
									array('vid' => '9', 'type' => 'bus', 'color' => 'white'),
									array('vid' => '10', 'type' => 'train', 'color' => 'red'));

$_SESSION["vehicles"] = $vehicles;

// $vid = $_POST['vid'];
// $vt = $_POST['vehicle-type'];
// $vc = $_POST['vehicle-color'];
//
// foreach( $vid as $key => $v) {
// 	print $v."\n";
// }
?>

<h1>Resources</h1>
<ul>
	<li><a href="https://www.w3schools.com/php/php_sessions.asp">W3Schools – PHP Sessions</a></li>
	<li><a href="https://www.w3schools.com/php/php_arrays.asp">W3Schools – PHP Arrays</a></li>
	<li><a href="https://www.w3schools.com/php/php_looping_foreach.asp">W3Schools – Foreach Loop</a></li>
	<li><a href="https://stackoverflow.com/questions/44437784/parse-sql-variables-with-session-array-in-php">Stackoverflow – Parse SQL variables with session array in PHP</a></li>
	<li><a href="https://stackoverflow.com/questions/3314567/how-to-get-form-input-array-into-php-array">How to get form input array into PHP array
</a></li>
	<li><a href="https://www.w3schools.com/php/php_arrays.asp">W3Schools – PHP Arrays</a></li>
</ul>
<!-- Click this to print out the array -->
<!-- <form action="submit-tickets.php" method="post">
	<input type="submit">
</form>

</body>
</html> -->
