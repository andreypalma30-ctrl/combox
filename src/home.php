<?php
if(!isset($_SESSION[userId] )){
        header('refresh:0;url=signin.html');

    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        Username:
    <a href="logout.php">logout</a>
    </body>
</html>