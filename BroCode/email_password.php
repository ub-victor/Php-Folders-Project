<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>Register</h2>

<form action="string_method.php" method="POST">

    Email:
    <input type="text" name="email"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    // 1. EMAIL VALIDATION
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format<br>";
    } else {
        echo "Email is valid<br>";
    }

    // 2. PASSWORD VALIDATION
    // Simple rules:
    // - at least 6 characters
    // - must contain a number

    if (strlen($password) < 6) {
        echo "Password must be at least 6 characters<br>";
    }
    elseif (!preg_match("/[0-9]/", $password)) {
        echo "Password must contain at least one number<br>";
    }
    else {
        echo "Password is strong enough<br>";
    }

}

?>