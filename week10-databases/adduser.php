<?php
include 'databaseconn.php';

$name = $_POST['name'];
$dog = $_POST['dog'];
$toy = $_POST['toy'];
$age = $_POST['age'];
$shots = $_POST['shots'];
?>
<html>
<head><title>New Patient Added</title></head>

<body>

<?php


echo $name . "   "  . $dog . "   "  . $toy . "   "  . $age . "   "  . $shots;




?>

</body>
</html>
