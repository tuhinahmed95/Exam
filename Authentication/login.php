<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>
<body>
    <?php
     echo isset($msg)?$msg:"";
     ?>
    <h1>Welcome To My Home Page </h1>
    <form action="#" method = "post"> 
      Username :  <input type="text" name = "username"><br><br>
      Password :  <input type="number" name = "password"><br><br>
        <input type="submit" name ="submit" value ="login">
    </form>
    
</body>
</html>

<?php

session_start();

if(isset($_POST['submit'])){ 
    $userName = $_POST['username'];
    $passWord = $_POST['password'];

    if($userName=="admin" && $passWord =="12345"){ 
        $_SESSION['fname']=$userName;
        header("location:demo.php");
    }
    else{ 
        $msg = "username or password is incorrect";
    }

}

?>