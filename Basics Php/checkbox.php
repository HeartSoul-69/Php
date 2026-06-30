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
        <input type="checkbox" name="burger" value="Burger"> 
        Burger <br>
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="coke" value="Coke">
        Cock <br>
        <input type="checkbox" name="chhole_bhature" value="Chhole Bhature">
        Chhole Bhature <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php
    if (isset ($_POST["submit"])) {
        if(isset($_POST["burger"])){
            echo "You ordered burger <br>";
        }
        if(isset($_POST ["pizza"])){
            echo "You ordered pizza <br>";
        }
        if(isset($_POST ["coke"])){
            echo "You ordered coke <br>";
        }
        if(isset($_POST ["chhole_bhature"])){
            echo "You ordered chhole bhature <br>" ;
        }
    }
?>