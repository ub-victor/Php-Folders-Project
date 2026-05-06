<?php 
    include ( "database.php")
    $sql = "SELECT * FROM users WHERE user = 'Ushindi'";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn)


?>