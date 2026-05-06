<?php 
    include ( "database.php");

    $sql = "SELECT * FROM users WHERE user = 'Ushindi'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)> 0){
        $row = mysqli_fetch_assoc($result);
        echo $row["id"] . "<br>";
    }
    mysqli_close($conn);
?>