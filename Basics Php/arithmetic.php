<?php
    //Arithmetic Operators
    // + - * / ** %

    $x = 3;
    $y = 5;
    $z = NULL;

    // $z = $x + $y;
    // $z = $x - $y;
    // $z = $x * $y;
    // $z = $x / $y;
    // $z = $x ** $y;             // "**" to the power of 
    // $z = $x % $y;              // gives the remainder 
    echo $z;


    // Increment / Decrement Operators 
    // ++ , -- 


    $counter = 7 ;
    // $counter = $counter + 1;
    // echo "{$counter}"

    $counter++;
    $counter += 2;
    echo $counter ;

    
    // Operator Precedence 
    // ()
    // ** 
    // * / %
    // + -

    $total = 1 + 2 - 12 / 15625;
    echo $total;
?>