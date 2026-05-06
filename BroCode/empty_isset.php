<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <form action="empty_isset.php" method="post">
            <label>Username: </label>
            <input type="text" name="username"> <br>

            <label>Password: </label>
            <input type="password" name="password"> <br>

                <input type="submit" name="login" value="Login"> <br>
    </form>

    </pre>
    
</body>
</html>

<!-- 
    👉 The browser collects form inputs and sends them to the server
👉  PHP automatically puts them into the $_POST array

-->

<?php
    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }
?>