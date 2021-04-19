 <?php
   require('db-connection.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation With DB
    </title>
</head>
<body>
    <?
        if(isset($_SESSION['email']) and $_SESSION['valid'] == "no"){
            echo "<p>"  . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
    ?>
    <div class="container">
        <h4><u>Email Address Entered:</u></h4>
        <form action="process.php" method="post">
            <input type="text" name="email" >
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?
    session_destroy();
    ?>
</body>
</html>