<?php
   session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qouting Dojo</title>
</head>
<body>
    <h1>Here are the awesome qoutes!</h1>
    <?php
        for($i = count($_SESSION['qoute_entered'])-1; $i>=0; $i--){
            echo $_SESSION['qoute_entered'][$i]['qoute'];
            echo $_SESSION['qoute_entered'][$i]; 
            "<span> at </span>"; 
            echo $_SESSION['qoute_entered'][$i]['created_at'];
        }
    ?>
    <form action="process.php" memthod="post">
        <input type="hidden" name="action" value="return">
        <input type="submit" value="Go Back">
    </form>    
</body>
</html>