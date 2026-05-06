<?php 
    function birthday($name, $age){
        echo "Happy Birthday to you <br>";
        echo "Happy Birthday dear {$name} <br>";
        echo "you are  {$age} years old <br>";
    }

    birthday("Victor", 21);
    echo "<br>";
    birthday("Winner", 26);
?>

<?php 
    echo "<br>";
    // function is_even($number){
    //     if($number % 2 ==0){
    //         return "The number is even";
    //     }else{
    //         return "The number isn't even";
    //     }
    // }

    // using tenary
    function is_even( int $number){
        return $number % 2 == 0
            ? "The number {$number} is even"
            : "The number {$number}  isn't even";
    }

    echo is_even(12);

?>