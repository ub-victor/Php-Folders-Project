<?php
    include("datsbase.php");

    $sql = "Insert Into users (user, password)
            Value ("Ushindi", "Ushindi@123!")";

    mysqli_query($conn, $sql)

    mysqli_close($conn)

?>