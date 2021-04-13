<?php session_start(); 
    if(!isset($_SESSION['msgs'])){
        $_SESSION['msgs'] = array();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<style>
    body{
        background: linear-gradient(to top right, #33ccff 0%, #66ff66 100%);
        height: 50em;
    }
    form{
        margin: 20px;
        margin-top: 12em;
        margin-left: 50em;
        padding: 20px;
        box-shadow: 5px 4px  #b3ffb3;
        width: 300px;
        height: auto;
        border-radius: 10px;
       
    }
    input{
        padding: 5px;
        margin: 20px;
        margin-left: 60px;
        border: none;
        box-shadow: 5px 0px  2px  #b3ffb3;
        border-radius: 2px;
    }
    input[type=text], input[type=password], input[type=email]{
        height: 20px;
    }
    
    input[type=date]{
        width: 170px;
    }
    input[type=submit]{
        margin-top: 20px;
        margin-left: 120px;
        padding: 7px;
        width: 70px;
        border-radius: 5px;
        display: block;
        background-color: #66ff66;
        color: #2f2f1e;
        cursor: pointer;
    }
</style>
<body>
    <form action="process.php" method="post">
        <input type="text" name="fname" placeholder="First name"> <?= $msgs ?> 
        <input type="text" name="lname" placeholder="Last name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="cpassword" placeholder="Confirm password">
        <input type="date" name="bdate" placeholder="Birth Date">
        <input type="submit"  placeholder="Register">
    </form>
    <?php
         if(isset($_SESSION['msgs'])){
            foreach($_SESSION['msgs'] as $msgs){
                echo $msgs;
            }
            $_SESSION = array();
        }
    ?>
</body>
</html>