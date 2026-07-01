<?php
// string functions 

    $username = "Anurag Singh";
    $phone = "123-456-7890";

    //$username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username);
    //$username = str_pad($username, 20 , "0");
    //$phone    = str_replace("-", "" , $phone);
    //$username = strrev($username);
    //$equals   = strcmp($username, "Anurag lingh");
    //$count    = strlen($username);
    //$index    = strpos ($phone, "-");
    //$firstname= substr ($username, 0 , 5);
    //$lastname = substr($username, 4);
    $fullname = explode (" " , $username);
    //$username = implode ("-" , $username);

    foreach ($fullname as $name) {
        echo $name . "<br>";
    };
?>