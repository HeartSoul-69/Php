<?php
    //isset () = Returs TRUE if a variable is declared  and not NULL
    //empty () = Returns TRUE if a variable is not declared , flase , NULL , " "


    $Name = "Anurag";

    // if (isset($Name)){
    //     echo "This Variable is set";
    // }
    // else {
    //     echo "This Variable is not set";
    // }

    if (empty($Name)){
        echo "This Variable is set";
    }
    else {
        echo "This Variable is not set";
    }
?>