<?php
    $hours = 40;
    $rate = 250;
    $weekly = null;

    if ($hours <= 40){
        $weekly = $hours * $rate;
    }
    else if ($hours <= 0) {
        echo "you are not getting pay this week";
    }

    echo "You made \${$weekly} this week";
?>