<?php
    require("./PHP/Database-Connection/db-connection.php");
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
    <?php
        if(isset($_SESSION['errors'])){
            foreach($_SESSION['errors'] as $error){
                "<p> $error </p>"; 
            }
            unset($_SESSION['errors']);
        }
    
    ?>
   <h2>Welcome to Qouting Dojo</h2>
   <form action="process.php" method="post">
        <input type="hidden" name="action" value="add">
        <label for="name">Your name: <input type="text" name="name" value="name"></label>
        <label for="qoute">Your qoute: <textaria name="qoute" ><textarea></label>
        <input type="submit" name="adQoute" value="Add my quote!">
        <input type="submit" name="qoute" value="Skip to qoute!">
   </form>
</body>
</html>