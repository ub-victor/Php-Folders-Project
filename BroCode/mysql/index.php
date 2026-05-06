<?php

include("database.php");

$sql = "INSERT INTO users (user, password)
        VALUES ('Ushindi', 'Ushindi@123!')";

mysqli_query($conn, $sql);

mysqli_close($conn);

?>