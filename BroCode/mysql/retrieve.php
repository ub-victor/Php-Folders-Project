<?php 
    include ( "database.php");

    // Creates an SQL query.
    $sql = "SELECT * FROM users WHERE user = 'Ushindis'";
    $result = mysqli_query($conn, $sql);

    // Checks if query returned any rows
    if(mysqli_num_rows($result)> 0){
        $row = mysqli_fetch_assoc($result); // if it could be to retrieve all user , we could pull the line of code in a while loop
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }else {
        echo "No result found";
    }
    mysqli_close($conn);
?>