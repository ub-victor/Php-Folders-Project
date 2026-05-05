<?php
    echo "Hello World!";
    echo '<button>Submit!</button>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>order Pizza</button>
    <br>
</body>
</html>
<!-- Variables -->

<?php
    $name = "Victoire Ushindi <br>";
    echo $name;
    $price = 4.55;
    $employed = true;
    echo "Hello {$name} <br>";
    echo "Your pizza is \${$price}";
    echo "<br> Is he employed: {$employed}";
?>
