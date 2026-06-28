<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset&empty2.php" method="post">
        <Label>Username</Label><br>
        <input type="text" name="username"> <br>
        <Label>Password</Label><br>
        <input type="password" name="Password"> <br><br>
        <input type= "submit" name="login" value="Log in">
    </form>
</body>
</html>

<?php

    // $Placehholder = $_POST["username"]; 
    if (isset($_POST["login"])) {
    
    $username = $_POST["username"];
    $Password = $_POST["Password"];

        if(empty($username)) {
            echo "username is empty";
        }
         
        elseif (empty("$Password")) {
            echo "password is empty";
        }

        else {
            echo "Hello $username";
        }
    }
?>