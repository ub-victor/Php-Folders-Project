<?php
    echo "Hello World!";
    echo '<button>Submit!</button> <br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="username">User name: </label><br>
        <input type="text" name="username"><br>
        <label for="password">Password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>
<?php 
    echo "Your user name is {$_GET ["username"]}";
    echo $_GET ["password"] . "<br>";
?>


<!-- Variables -->

<?php
    $name = "Victoire Ushindi <br>";
    echo $name;
    $price = 4.55;
    $employed = true;
    $sum = 3 + 3;
    echo "Hello {$name} <br>";
    echo "Your pizza is \${$price}";
    echo "<br> Is he employed: {$employed}<br>";

    
    echo "<br>the  sum of 3 + 3 = {$sum} <br>";
?>

