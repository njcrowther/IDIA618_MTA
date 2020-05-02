<?php
    // Start Session
    session_start();
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

    if(isset($_POST['submit'])){
        $username = $_POST["username"];

        $sql = "SELECT `username`,`password` from `users` WHERE `username` = '$username'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                if ($row["password"] == md5($_POST["password"])) {
                    $_SESSION["username"] = $username;
                    header('Location: dashboard_page.php');
                    // echo "Session Username is " . $_SESSION["username"];
                } else {
                    echo "Incorrect";
                }
            }
        }

        
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="">
</head>

<body>
<h1>Login</h1>
<form name="login" method="POST" action="login_page.php">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>

</html>