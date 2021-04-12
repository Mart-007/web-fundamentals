<?php 

session_start(); 

?>
<!-- This is Initial test -->

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
            margin-top: 10px;
            display: block;
        }
        input[type=text]{
            width: 100px;
            height: 20px;
        }
        .condition{
            margin: auto;
            margin-bottom: 10px;
            border: solid black 1px;
            padding: 40px;
            background-color: red;
            width: 120px;
            height: 110px;
            
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
        <form action="process.php" method="post">
            <h5 name="condition" class="condition">
<?
$randNum = $_SESSION['randNum'];
$userGuess=$_POST["number"];

if (isset($randNum)) {
    if ($userGuess<$randNum) {
            echo "<center><h1>Too low!</h1></center>";
            $_SESSION['randNum']++;
        }
    if ($userGuess>$randNum) {
            echo "<center><h1>Too high!</h1></center>";
            $_SESSION['randNum']++;
        }
    if ($userGuess==$randNum) {
            echo "<center>Congratulations You're right!!!</center>";
                         unset($_SESSION["randNum"], $_SESSION['number']);
    }
}
else {
    echo "Uh oh";
}



?></h5>
            <input type="text" name="number" class="text">
            <input type="submit" value="Submit" class="submit">
        </form>
    </div>
</body>
</html>