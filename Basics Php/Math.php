<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
</head>
<body>
    <form action="Math.php" method="post">
        <Label>First Number</Label>
        <input type="number" name="x">
        <!-- <Label>Second Number</Label> -->
        <!-- <input type="number" name="y">
        <Label>Third Number</Label>
        <input type="number" name="z"> -->
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = NULL;

    // $total = abs($x);                                                    // Makes sure number is Always Positive
    // $total = round($x);                                                 // rounds off the decimal
    // $total = floor($x);                                                // to always round down
    // $total = ceil($x);                                                // to always roudn up
    // $total = sqrt($x);                                               // square root of number 
    // $total = max($x , $y , $z);                                     // largest of all Numbers 
    // $total = min($x , $y , $z);                                    // Smallest of all Numbers
    // $total = pi();                                                // prints pi value 
    // $total = rand($min , $max);                                  // generates random numbers (can add parameters)
?>

