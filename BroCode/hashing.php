<?php
    $password = "Ushindi@23!";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    // echo $hash;
    if(password_verify("victoire", $hash)){
        echo "You are logged in!";
    }else{
        echo "Incorrect password!";
    }

?>