<?php
// I included this file so  $conn becomes available in this file.
include("database.php"); 

$sql = "INSERT INTO users (user, password)
        VALUES ('Ushindi', 'Ushindi@123!')";

//Sends the SQL command to MySQL.
mysqli_query($conn, $sql);

mysqli_close($conn);

?>