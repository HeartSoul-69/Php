<?php
    // hashing = transforming sensitive data (password) into  letters, number, and/or symbols via a mathematical process. (similar to encryption) 
    //Hides the original data from 3rd parties. 

    $password = "Anurag-69";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("pizza123", $hash)) {
        echo "You are logged in!";
    }
    else {
        echo "Incorrect password!";
    }

?>