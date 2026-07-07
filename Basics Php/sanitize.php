<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize.php" method="post">
    <label>Username</label>
    <input type="text" name="username" > <br> <br>
    <label>Age</label>
    <input type="text" name="Age" > <br> <br> 
    <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])) {

        $username = filter_input(INPUT_POST , "username", FILTER_SANITIZE_SPECIAL_CHARS); //(type,options, add_empty)
        
        $Age = filter_input(INPUT_POST, "Age" , FILTER_SANITIZE_NUMBER_INT);


        echo "hello {$username} <br>";
        echo "you are {$Age} year old";
    }
?>