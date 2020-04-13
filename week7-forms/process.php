<!-- Things wrong in the html
1. Extra paragraph tag
2. Input names were wrong
3. Indentations weren't very good?

 -->
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$lplate=$_POST['lplate'];
$carType=$_POST['carType'];
echo "First Name is ".$fname."<br>";
echo "Last Name is ".$lname."<br>";
echo "License Plate is ".$lplate."<br>";
echo "Car Type is ".$carType."<br>";
 ?>
