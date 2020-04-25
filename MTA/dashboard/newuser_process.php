<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $db = "MTA";

    

    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
    // echo "Connected successfully";
    }

    $username= mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $password = md5($password);

    $sql = "SELECT `username` from `users` WHERE `username` = '$username'";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        echo "Sorry that user exists";
    } else {
        $sql = "INSERT INTO `users` (`username`,`email`,`password`) VALUES ('$username','$email','$password');";
        $result = $conn->query($sql);
        echo "New User Created!";
    }


?>