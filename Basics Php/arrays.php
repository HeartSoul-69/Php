<?php
    //array = "variable" which can hold more than one value at a time 

    // $food_1 = "apple";
    // $food_2 = "banana";
    // $food_3 = "Orange";
    // $food_4 = "Kiwi";
    // $food_5 = "Coconut";

    $foods = array("apple","orange","banana", "kiwi");
    echo $foods[3]. "<br>";

    // array_push($foods,"pineapple");
    // array_pop($foods);
    // array_shift($foods);                          - removes the first one and shift others
    //reversed_foods = array_reverse($foods);
    //echo count($foods);
 
    foreach($foods as $food) {
        echo $food."<br>";
    }

?>