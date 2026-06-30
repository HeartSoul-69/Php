<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="radioBtn.php" method="post">
    <input type="radio" name="credit_card" value="Visa">
    Visa <br>
    <input type="radio" name="credit_card" value="Master Card">
    Master Card <br>
    <input type="radio" name="credit_card" value="Cash">
    Cash on delivery <br>
    <input type="submit" name="Confirm" value="Confirm">
  </form>  
</body>
</html>

<?php
    if(isset ($_POST ["Confirm"])) {

    $credit_card = NULL;

    if(isset($_POST["credit_card"])){
        $credit_card = $_POST["credit_card"];
    }

    // if($credit_card == "Visa"){
    //     echo "You selected Visa";
    // }
    // elseif ($credit_card == "Master Card") {
    //     echo "You Selected Master Card";
    // }
    // elseif ($credit_card == "Cash") {
    //     echo "You Selected Cash on delivery";
    // }
    // else {
    //     echo "Please Select an option you want to proceed with";
    // }
    
    switch($credit_card) {
        case "Visa" :
            echo"You selected Visa";
            break;
        case "Mastercard" :
            echo "You selected Mastercard";
            break;
        case "Cash" :
            echo "You selected Cash on delivery";
            break;
    }
    }
?>