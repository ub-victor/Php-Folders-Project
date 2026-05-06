<?php


?>

<!-- to retrieve form the db -->
<?php 
    include("database.php");

    $sql = "SELECT * FROM users WHERE user = 'Ushindi'";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn)


?>