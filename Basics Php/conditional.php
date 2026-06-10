<?php
    $Age = 0;

    if($Age >= 18){
        echo "You are eligible";
    }
    elseif($Age == 0 ) {
        echo "You are not even born yet";
    }
    elseif ($Age > 100) {
        echo "You are either a old fella or fart Smella";
    }
    else {
        echo "Your are too young";
    }

?>