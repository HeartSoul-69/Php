<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get,Post2.php" method="Post">
    <Label>Quantity</Label> <br><br>
    <input type="number" name="quantity"> <br> <br>
    <input type="Submit" name="Submit"> <br>

    </form>
</body>
</html>

<?php
    $Item = "Biryani";
    $Price = 70;
    $quantity = $_POST["quantity"];
    $Total = NULL;

    $Total = $quantity * $Price;

    echo "You have ordered {$quantity} x {$Item}/s <br>";
    echo "Your total is : {$Total}";

?>