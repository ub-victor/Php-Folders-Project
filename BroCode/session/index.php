<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the login Page <br>
    <a href="home.php">This goes to the Home Page</a>
</body>
</html>

<?php 
    $_SESSION["username"] . "<br>";
    $_SESSION["password"] = "Ushindi@123!"

?>