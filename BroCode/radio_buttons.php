<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio button</title>
</head>
<body>
    <form method="post" action="radio_buttons.php">
        <!-- The value is what gets sent to PHP IF this option is selected -->
    <input type="radio" name="credit_card" value="Visa">Visa <br>
    <input type="radio" name="credit_card" value="Mastercard">Mastercard<br>
    <input type="radio" name="credit_card" value="American Express">American Express<br>
    <br>
    <input type="submit" name="confirm" value="confirm">
</form>
</body>
</html>

<?php 
    if(isset($_POST["confirm"])){
        
        if(isset($_POST["credit_card"])){
            $credit_card = $_POST['credit_card'];
        }elseif($credit_card == "Visa"){
            echo "You selected Visa";
        }elseif($credit_card == "Mastercard"){
            echo "You selected Mastercard";
        }elseif($credit_card == "American Express"){
            echo "You selected American Express <br>";
        }else{
            echo "Please select one option";
        }
    }
    
?>