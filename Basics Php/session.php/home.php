<?php
    session_start();

        if (isset($_POST["login"])) {

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    if(!empty($_POST["username"])&&
        !empty($_POST["password"]) 
    ) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header ("Location: home.php");
    }
    else {
        echo "Missing username / password <br>";
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is a home page <br>
    <a href="index.php"> This goes to the login page</a> <br>

    <form action="home.php" method="post">
        <input type="submit" name="log out" value="log out">
    </form>
</body>
</html>

