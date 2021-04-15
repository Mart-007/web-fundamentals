<?php
    require('success.php');
    $query = "INSERT INTO records (email) VALUES ('martbords07@gmail.com')";
    $email = run_mysql_query($query);
    var_dump($email);

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
    <form action="sucess.php" method="post">
        <p>Email address entered:</p>
        <input type="hidden" name="input">
    </form>
    <?php
        echo "<p>$email </p>";
    ?>
</body>
</html>