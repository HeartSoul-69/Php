<?php
    //session = SGB used to store information on user to be used across multiple pages.
    //A user is assigned a session-id 
    //eg -> login credentials

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the login page <br>
    <!-- <a href="home.php">This goes to home page</a> -->

    <form action="home.php" method="post">
        <label>Username</label> <br>
        <input type="text" name="username"> <br>
        <label>Password</label> <br>
        <input type="password" name="password"> <br> <br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    $_SESSION["username"] = "Anurag";
    $_SESSION["password"] = "anurag123";

    echo $_SESSION["username"] . "<br>";

    if(isset($_POST["log out"])) {
        session_destroy();

        header("Location:index.php");
    }

?>