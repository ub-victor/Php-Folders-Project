<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resto Challenge</title>
</head>
<body>
    <?php 
    $item = "Pizza";
    $price = 5.99;
    ?>
    <form action="resto.php" method="post">
        <h6>How many Pizza you want , one cost: <?php echo "{$price}"; ?> </h6>
        <label>Quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>

    <?php 
        $item = "Pizza";
        $price = 5.99;
        $quantity = $_GET['quantity'];
        $total = null;

        $total = $quantity * $price;

        echo "You have ordered {$quantity} x {$item}/s <br>" ;
        echo "Your total is: \${$total}";
    ?>

</body>
</html>