<?php
    require("db-connection.php");
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        p{
            color: red;
        }
    </style>
</head>
<body>
    <?php  
        if(isset($_SESSION['email']) and $_SESSION['valid'] == "yes"){
            echo "<p>"  . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
    ?>
</body>
</html>