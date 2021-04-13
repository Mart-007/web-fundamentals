<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
        body{
        background: linear-gradient(to top right, #33ccff 0%, #66ff66 100%);
        height: 50em;
        font-family: Arial, Helvetica, sans-serif;
    }

    h2{
        color: #006600;
        margin-left: 650px;
        margin-top: 300px;
        padding: 50px;
        width: 600px;
        box-shadow: 4px 3px #b3ffb3;
    }
    </style>
</head>
<body>

    <h2> Thanks for submitting your information! </h2> 
   
        <h1> this is  <?= $_POST['fname'] ?> </h1>
    
    

</body>
</html>