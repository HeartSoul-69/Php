<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="Math2.php" method="post">
            <Label>Radius</Label> <br>
            <input type="text" name="radius"> <br> <br>
            <input type="submit" value="calculate"> <br>
        </form>  <br>
</body>
</html>

<?php
    $Radius = $_POST["radius"];
    $Circumference = 2*pi() * $Radius;
    
    $Area = pi() * pow($Radius,2);
    $Area = round($Area,2);

    $Volume = 4/3 * pi() * pow($Radius,3);
    $Volume = round($Volume,2);

    echo "Circumference = {$Circumference}cm <br>";
    echo "Area = {$Area}cm^2 <br>";
    echo "Volume = {$Volume}cm^3 <br>";
    
?>