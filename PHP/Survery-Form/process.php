<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suvery Form</title>
    <style>
         body{
            background-color: #0e1300;
        }
        form{
            margin: 350px 650px; 
            border: solid  #ccccb3 1px;
            min-height: 330px;
            width: 400px;
            font-family: Arial, Helvetica, sans-serif;
        }
        p{
           margin-top: 40px;
           margin-left: 30px;
           color: #ccccb3;;
        }
        h5{
            margin: auto;
            font-size: 20px;
            color: #ccccb3;;
        }
        .btn{
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 260px;
            background-color:  #0066ff;
            border-bottom: solid black 3px;
            border-radius: 7px;
            color: #ccccb3;
            padding: 5px;
            width: 100px;
            cursor: pointer;
            font-weight: 600;
        }
    </style>
</head>
<body>
    
    <form action="index.php" method="post">
       <h5><ul>Submitted Information</ul></h5>
       <p> Your name: <?= $_POST["name"]; ?> </p>
       <p> Your location: <?= $_POST["location"]; ?></p> 
       <p> Your favorite language: <?= $_POST["language"]; ?></p> 
       <p> Your favorite comment:  <?= $_POST["comment"]; ?></p> 
       <input type="submit" value="return" class="btn">
    </form>
</body>
</html>