<?php
    //Logical operatrs = combine conditional statements
    //if (condition1 || condition2)
    
    // && = True if both conditions are true
    // || = True if at least one condition is true
    // !  = True if false, False if True

    $temp = 20;

    if ($temp >= 0 && $temp  <=30) {
        echo "Weather is good";
    }
    else {
        echo "Weather is bad";
    }

    
    if($temp < 0 || $temp > 30 ) {
        echo "Weather is bad";
    }
    else {
        echo "Weather is good";
    }
?>