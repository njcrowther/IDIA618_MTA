<?php
// echo '{"ownername":"greg", "petname":"Buddy"}';

$owner = $_POST["owner"];
$petname = $_POST["petname"];

echo '{"ownername": '.$owner.', "petname":'.$petname.'}';
?>
