<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>
<body>
    <a href="another.php">Another</a>
    <h1>This Is A From</h1>

    <form action="#" method = "post"> 
        
        ID : <input type="number" name ="textid"><br><br>
        Name : <input type="text" name = "textname"><br><br>
        Email : <input type="text" name ="email"><br><br>
        Phone : <input type="number" name ="phn"><br><br>
        <input type="submit" name = "submit" value ="logout">
    </form>
    
</body>
</html>

<?php
session_start();
if(!isset($_SESSION['fname'])){ 

}

?>