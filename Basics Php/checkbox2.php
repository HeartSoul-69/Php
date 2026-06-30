<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <label>What would you like to order</label>
        <br>
        <input type="checkbox" name="foods[]" value="Burger">                       
        Burger <br>
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="foods[]" value="Coke">
        Cock <br>
        <input type="checkbox" name="foods[]" value="Chhole Bhature">
        Chhole Bhature <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php
    if (isset($_POST ["submit"])) {

        $foods = $_POST["foods"];
        echo $foods[1];

        foreach ($foods as $food) {
            echo $food . "<br>";
        }
    }

?>