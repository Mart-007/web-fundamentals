
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
    <title>Email Validation with DB</title>
    <style>
    body{
        background-color:  #ffffcc;
        position: absolute;
    }
        form{
            margin-top: 300px;
            margin-left: 600px;
            padding: 10px;
            border: solid black 1px;
            height: auto;
            width: 300px;
            font-family: 'Courier New', Courier, monospace;
        }

    </style>
</head>
<body>
<?php  
         if(isset($_SESSION['message']) and ($_SESSION['valid'] == 'no'))
            {
                echo "<div class='error'>" . $_SESSION['message'] . "</div>";
                unset($_SESSION['message']);
        }
    ?>
    <p>Email address entered:</p>
    <form action="sucess.php" method="post">  
        <input type="text" name="email">
        <input type="submit" name="submit">
    </form>
    <?php
        echo "<p>$email</p>";
    ?>
</body>
</html>