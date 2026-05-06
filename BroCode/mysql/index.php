<?php
// I included this file so  $conn becomes available in this file.
include("database.php"); 

    $username = "";
    $password = "";

$sql = "INSERT INTO users (user, password)
        VALUES ('Ushindi', 'Ushindi@123!')";

try{
    //Sends the SQL command to MySQL. which database connection and SQL command to execute
    mysqli_query($conn, $sql);
    echo "<br>";
    echo "<br>User is now registered";

}catch(mysqli_sql_exception){
    echo "Could not register user";
}
// Closes database connection.
mysqli_close($conn);

?>