<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate.php" method="post">
    <label>Age</label>
    <input type="text" name="Age" > <br> <br> 
    <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>

<?php
    if(isset($_POST ["submit"])) {
        
        $Age = filter_input(INPUT_POST,"Age" , FILTER_VALIDATE_INT);

        if(empty($Age)) {
            echo "this number is invalid, Please try again";
        }
        else {
            echo "You are {$Age} years old";
        }
    }
?>