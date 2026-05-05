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
    echo "Your user name is: {$_GET ["username"]}<br>";
    echo "Your password is: {$_GET ["password"]} <br>";
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

<?php 
// array = "variable" which can hold more than one value at a time
    echo "Array <br>";
    $foods = array("Apple", "orange", "banana", "coconut");
    echo $foods[0] . "<br>";
    // to rename a certain element in the array 
    // $foods[0] = "Pineapple";
    // add an item in the array we use the array_push
    // to remove the first element we use array_shift and the last one we use pop
    // array_pop($foods);
    // to reverse
    // array_reverse($foods);
    // array_shift($foods);
    array_push($foods, "pineapple");
    echo "<br> Let us use the foreach  <br>";

    foreach($foods as $food){
        echo $food . "<br>";
    }

?>

<?php 
    // associative array = An array made of Key=> value pairs

    // countries => capitals
    // id => username
    // item = > price

    $capitals = array(
        "USA"=> "Washington D.C",
        "Japan"=> "Kyoto",
        "South Korea"=> "Seoul",
        "Indea"=> "New Delhi"
    );

    echo "<br> {$capitals["USA"]} <br>";

    foreach($capitals as $capital){
        echo $capital . "<br>";
    }
    echo "<br>";
    

?>

