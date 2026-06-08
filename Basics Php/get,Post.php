<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label> username: </label> <br>
        <input type="text" name= "username"> <br>

        <label>password : </label> <br>
        <input type="password" name ="password"> <br> <br>

        <input type="Submit" value="login">
    </form>
    
</body>
</html>


<!-- //$_GET = Data is appended to the url 
          NOT Secure
          char limit
          Bookmark is possible w/values 
          GET requests can be cached
          Better for a search page 


//$_POST = Data is packed inside the body of the HTTPS reqeust 
           More Secure
           No data limit 
           Cannot Bookmark
           GET requests are not cached
           Better for submitting credentials  -->

<?php 
    echo "{$_GET["username"]} <br> ";
    echo "{$_GET["password"]} <br> ";

    // echo "{$_POST["username"]} <br> ";
    // echo "{$_POST["password"]} <br> ";
?>