<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio button</title>
</head>
<body>
    <input type="radio" name="credit_card" value="Visa">Visa <br>
    <input type="radio" name="credit_card" value="Mastercard">Mastercard<br>
    <input type="radio" name="credit_card" value="American Express">American Express<br>
    <br>
    <input type="submit" name="confirm" value="confirm">
</body>
</html>

<?php 
    if(isset($_POST["confirm"])){
        
    if(isset($_POST["credit_card"])){
        $credit_card = $_POST['credit_card'];
        echo $credit_card;
    }else{
        
    }


    }
    
?>