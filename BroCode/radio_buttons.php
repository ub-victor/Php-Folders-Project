<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio button</title>
</head>
<body>
    <input type="radio" name="credit_card" value="Visa">Visa <br>
    <input type="radio" name="credit_card" value="Visa">Mastercard<br>
    <input type="radio" name="credit_card" value="Visa">American Express<br>
    <br>
    <input type="submit" name="confirm" value="confirm">
</body>
</html>

<?php 
    if(isset($_POST["confirm"]))
    $credit_card = $_POST['credit_card'];

?>