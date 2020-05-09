<?php
    include '../databaseconn.php';

    // Get Values
    $id = $_POST['id'];

    // Build Query
    $sql = "SELECT `id`,`notes` FROM `issues` WHERE `id`=$id;";

    $queryResult = $conn->query($sql);
    $myArray = array();

    //setting up variables
    if ($queryResult->num_rows > 0) {
        //output data of each row
        while($row = $queryResult->fetch_assoc()){
            $myArray[] = $row;    
        }
        echo json_encode($myArray);
    }

    $conn->close();



    // echo $queryResult;

?>