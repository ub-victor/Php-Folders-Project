<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <!-- making all names same array it make PHP to receive 
        $_POST['foods'] = ["Pizza", "Hotdog"];-->
        <input type="checkbox" name="foods[]" value="Pizza">Pizza <br>
        <input type="checkbox" name="foods[]" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">Hotdog <br>
        <input type="checkbox" name="foods[]" value="Taco">Taco <br>
        <br>
        <input type="submit" name="submit"><br>
    </form>
</body>
</html>

<!-- 
    $all_foods = ["Pizza", "Hamburger", "Hotdog", "Taco"];
        $selected = $_POST["foods"] ?? [];

        foreach($all_foods as $food){
            if(in_array($food, $selected)){
                echo "You like $food <br>";
            } else {
                echo "You don't like $food <br>";
            }
        }


-->

<?php 
// “Does this variable exist AND is it not null?”
// $_POST['submit'] = "", which is not null but a empty string
    if(isset($_POST["submit"])){

        if(isset($_POST["foods"])){

            

            foreach($_POST["foods"] as $food){
                switch($food){
                    case "Pizza":
                        echo "You like Pizza🍕 <br>";
                        break;
                    case "Hamburger":
                        echo "You like Hamburger <br>";
                        break;
                    case "Hotdog":
                        echo "You like Hotdog <br>";
                        break;
                    case "Taco":
                        echo "You like Taco <br>";
                        break;
                }         

            }

        }else{
            echo "You don't like any of these foods";
        }
    }
?>