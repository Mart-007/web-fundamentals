<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New user</title>
    <style>
    body{
        background-color: #00b359;
    }
    .container{
        margin-top: 200px;
        margin-left: 500px;
    }
        h1{
            margin-left: 250px;
            font-family: Arial, Helvetica, sans-serif;
        }
        form{
            margin-left: 250px;
            padding: 20px;
            border: solid black #4dffa6;
            display: block;
            width: 300px;
            background-color: #00e673;
            font-family: Arial, Helvetica, sans-serif;
        }
        input{
            margin: 10px;
            border: none;
            height: 20px;
        }
        .email{
            margin-left: 45px;
        }
        .btn{
            margin-left: 90px;
            padding: 5px;
            color: #00994d;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="create" method="post">
            First name:<input type="text" name="fname"><br>
            Lirst name:<input type="text" name="lname"><br>
            Email:<input type="text" name="email" class="email"><br>
            <input type="submit" name="submit" value="Register" class="btn">
        </form>
    </div>        
</body>
</html>