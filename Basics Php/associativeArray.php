<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associativeArray.php" method="post">
        <label>Enter your Country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php
    //associative array = An array made of key => value pairs

    // countries =>capitals
    // id   => userame
    // item => price

    $capitals = array("India"=>"New Delhi",
                    "USA" => "Washington DC",
                    "Bangladesh" => "Dhaka",
                    "Pakistan" => "Islamabad"); 

    $capital = $capitals [$_POST ["country"]];
    echo $capital;

    // echo $capitals["USA"];
    // $capitals ["USA"] = "Las Vegas";
    // $capitals ["India"] = "Delhi";
    // $capitals["Pakistan"] = "Mulli";

    //array_shift($capitals);                                         -> Removes the first one from list 
    //$keys = array_keys($capitals);
    //$values = array_values($capitals);
    //capitals = array_flip($capitals);                               -> switches the values and key with each other
    //capitals = array_reverse($capitals);                            -> back to normal
    //echo count($capitals);


//foreach($values as $value) {
//foreach($keys as $key) {

//     foreach($capitals as $key => $value) {
//         echo "{$key} => {$value} <br>";
//     }

?>