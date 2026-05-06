<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "Ushindi123!";
$db_name = "Brocode";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if($conn){
        echo "Database connected successfully!";
    }else{
        // If database connection fails: returns the error message.
        // Then die() , Prints the message Stops the script completely
        die("Connection failed: " . mysqli_connect_error());
    }

?>