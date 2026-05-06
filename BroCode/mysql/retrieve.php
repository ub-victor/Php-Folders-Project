<?php 
    include ( "database.php");

    $sql = "SELECT * FROM users WHERE user = 'Ushindis'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)> 0){
        $row = mysqli_fetch_assoc($result);
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }else {
        echo "No result found";
    }
    mysqli_close($conn);
?>