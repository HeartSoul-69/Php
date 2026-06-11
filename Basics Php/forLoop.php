<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forLoop.php" method="post">
        <Label>Enter a number to count to : </Label> <br>
        <input type="text" name="counter"><br> <br>
        <input type="submit" value="start" ><br>
    </form>
</body>
</html>


<?php
    //for loop = to repeat a code for a certain amount of time 

    // for($i=0 ; $i<9 ; $i++) {
    //     echo "Hello <br>";
    // }

    $counter = $_POST ["counter"];

    for($i = 0 ; $i <= $counter ; $i++) {
        echo $i ."<br>";
    }
?>