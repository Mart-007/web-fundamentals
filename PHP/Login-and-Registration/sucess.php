<?php
    require("db-connection.php");
    session_start();

    echo "Welcome {$_SESSION['first_name']}!"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered</title>
</head>
<body>
    <a href="process.php">Log out!</a> 
</body>
</html>