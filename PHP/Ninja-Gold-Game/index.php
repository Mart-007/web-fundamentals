<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Gold</title>
    <style>
        body{
            background-color: #ffffcc;
        }
        .content{
            margin-bottom: 20px;
            border: solid black 1px;
            width: 1000px;
            margin: auto;
            height: auto;
        }
        .setCount{
            margin: 20px;
            margin-left: 40px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
        }
        .setCount > input[type=text]{
            width: 100px;
            padding: 5px;
        }
        .boxes > div{
            margin: 20px;
            margin-left: 40px;
            padding: 20px;
            border: solid black 1px;
            display: inline-block;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        .action{
            margin-top: 60px;
            margin-left: 40px;
            margin-bottom: 20px;
            border: solid black 1px;
            height: auto;
            width: 875px;   
            padding: 20px; 
        }
        span{
            margin-top: 40px;
            margin-left: 40px;
            position: absolute;
        }
        .green{
            color: green;
        }
        .red{
            color: red;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="setCount">
            Your Gold: <input type="text" name="input" placeholder="0">    
        </div>
        <div class="boxes">
            <div>
                <h3>Farm</h3>
                <p>(earns 10-20 golds)</p>
                <form action="process.php" method="post">
                    <input type="hidden" name="action" value="farm">
                    <input type="submit" value="Find Gold">
                </form>
            </div>
            <div>
                <h3>Cave</h3>
                <p>(earns 5-10 golds)</p>
                <form action="process.php" method="post">
                    <input type="hidden" name="action" value="cave">
                    <input type="submit" value="Find Gold">
                </form>
            </div>
            <div>
                <h3>House</h3>
                <p>(earns 2-5 golds)</p>
                <form action="process.php" method="post">
                    <input type="hidden" name="action" value="house">
                    <input type="submit" value="Find Gold">
                </form>
            </div>
            <div>
                <h3>Casino</h3>
                <p>(earns 0-50 golds)</p>
                <form action="process.php" method="post">
                    <input type="hidden" name="action" value="casino">
                    <input type="submit" value="Find Gold">
                </form>
            </div>
        </div>
        <span>Activity:</span>
        <div class="action">
            <?php
                $activities_array = array();
                if(isset($_SESSION['action'])){
                    $activities_array = $_SESSION['action'];
                }
                if(isset($_SESSION['activities'])){
                    $activities_array[] = $_SESSION['activities'];
                }
                $_SESSION['action'] = $activities_array;

                foreach ($_SESSION['action'] as $action){
                    echo $action;
                }              
            ?>
        </div>

    </div>
</body>
</html>