<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "Ushindi123!";
$db_name = "Brocode";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if($conn){
        echo "Database connected successfully!";
    }else{
        die("Connection failed: " . mysqli_connect_error());
    }

?>