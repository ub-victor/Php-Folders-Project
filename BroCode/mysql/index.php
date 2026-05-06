<?php
// I included this file so  $conn becomes available in this file.
include("database.php"); 

$sql = "INSERT INTO users (user, password)
        VALUES ('Ushindi', 'Ushindi@123!')";

try{

}catch(mysqli_sql_exception){
    echo "Could not register user"
}
// Closes database connection.
mysqli_close($conn);

?>