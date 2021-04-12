<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <form action="process.php" method="post">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" />
    </form>
    <?php
        if(isset($_SESSION['errors'])){
            foreach($_SESSION['errors'] as $error){
                echo $error;
            }
            $_SESSION = array();
        }
    ?>
</body>
</html>
<?php

session_start();
if (isset($_SESSION['errors']))
{
    foreach($_SESSION['errors'] as $error)
    {
        echo "<p>". $error. "</p>";
    }
}
?>
<form action='process.php' method='post'>
    Name: <input type='text' name='name'>
    City: <input type='text' name='city'>
    <input type='hidden' name='action' value='register'>
    <input type='submit' value='sign up!'>
</form>



