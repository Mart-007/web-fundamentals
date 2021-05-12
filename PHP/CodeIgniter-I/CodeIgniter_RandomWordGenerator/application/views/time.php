<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
    <style>
        body{
          background-color: #66cc00;  
        }
        .container{
            margin-top: 100px;
            margin-left: 650px;
            /* border: solid 1px black; */
            box-shadow: 0 8px 6px -6px black;
            width: 500px;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #8cff1a;
            border-radius: 4px;
        }
        h1{
            padding: 20px;
            text-align: center;
            color: #264d00;
        }
        h2{
            margin-left: 170px;
            text-align: center;
            display: inline-block;
            color: #1a3300;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>The current time and date:</h1>
        <?php
            echo "<h2> $time_and_date </h2>";
        ?>
    </div>
</body>
</html>