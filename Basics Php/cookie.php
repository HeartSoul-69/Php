<?php
    //cookie = Information about a user stored in a user's targeted  
    //advertisements,browsing preferances,and other non-sensitive data

    setcookie("fav_food", "Biryani", time() - 0  * 2, "/");                                 //expire time
    setcookie("fav_drink", "Coffee", time() + 86400 * 2, "/");
    setcookie("fav_dessert", "Ice-creamm", time() + 86400 * 2, "/");

    // foreach($_COOKIE as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // } 

    if (isset($_COOKIE["fav_food"])) {
        echo "BUY SOME {$_COOKIE ["fav_food"]} !!!";
    }
    else {
        echo "I don't know your favorite food";
    }
?>