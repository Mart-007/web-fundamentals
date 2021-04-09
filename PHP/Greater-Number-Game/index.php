<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greater number games</title>
    <style>
        .form{
            margin-top: 100px;
            margin-left: 700px;
            padding: 20px;
            width: 500px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            border: solid black 1px;
            background-color:  #e0e0d1
;
        }
        form{
            margin-top: 50px;
            display: block;
        }
        input[type=text]{
            width: 100px;
            height: 20px;
        }
        .submit{
            margin-left: 222px;
            margin-top: 20px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="form">
        <h1>Welcome to the Great Number Game!</h1>
        <p>I am thinking of a number between 1 and 100</p>
        <span>Take a guess!</span>
        <?php 
            $number = rand(1, 100);
            if (isset($_SESSION["number"]) == $number){
                "<h1> your great mafaka!";
            }
        ?>
        <form action="process.php" method="$_SESSION">
            <input type="text" name="number" class="text">
            <input type="submit" value="Submit" class="submit">
        </form>
    </div>
</body>
</html>