<?
    require('db-connection.php');
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wall</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
            if(isset($_SESSION['errors'])){
                foreach($_SESSION['errors'] as $error){
                    echo "<p class=error>  {$error}  </p>";
                    unset($_SESSION['errors']);
                }
            }
            if(isset($_SESSION['message'])){
                echo "<p class=success> {$_SESSION['message']} </p>";
                unset($_SESSION['message']);
            }
        ?>
    <header>The Wall</header>
    <div class="container">
        <h1 class="reg">Register</h1>
        <form action="process.php" method="post" class="register">
            <input type="hidden" name="action" value="register">
            First name:<input type="text" name="fname" placeholder="First name" class="fname"><br>
            Last name:<input type="text" name="lname" placeholder="Last name" class="lname"><br>
            Email:<input type="text" name="email" placeholder="Email" class="email"><br>
            Password:<input type="password" name="password" placeholder="Password" class="reg_password"><br>
            Confirm password: <input type="password" name="cpassword" placeholder="Confirm password" class="cpassword"><br>
            <input type="submit" class="submit" value="Register">
        </form>
                <hr></hr>
                <h1>Login</h1>
        <form action="process.php" method="post" class="login">
            <input type="hidden" name="action" value="login">
            Email:<input type="text" name="email" placeholder="Email" class="login_email"><br>
            Password:<input type="password" name="password" placeholder="Password" class="login_password"><br>
            <input type="submit" class="login_btn" value="Login">
        </form>
    </div>
</body>
</html>