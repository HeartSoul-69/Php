<?php 
//function = write some code once , reuse when you need it 
//             type () after function name to invoke 
//             ex. add() substract() multiply() divide()



// function greet ($name) {
//     echo "yooo Wassup {$name} !!! <br>";
// }

// greet("Anurag");
// greet("Kundal");
// greet("Gutka");


// function is_even($num) {
//     return $num % 2;
// }

// echo is_even(19);


function Hypotenuse($a, $b) {
    $c = sqrt($a**2+$b**2);
    return $c;
}

echo Hypotenuse(2,4);
?>