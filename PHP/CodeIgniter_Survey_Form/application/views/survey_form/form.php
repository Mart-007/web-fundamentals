<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <style>
        body{
            background-color: #3366cc;
        }
        .container{
            margin-top: 200px;
            margin-left: 650px;
            padding: 20px;
            width: 500px;
            background-color: #5c85d6;
            border-radius: 3px;
            box-shadow: 5px 10px 8px #050a14;
            text-align: justify;
            font-family: Arial, Helvetica, sans-serif;
        }
        form{
            margin-left: 100px;
        }
        input, select{
            margin: 10px;
        }
        .name{
            margin-left: 65px;
        }
        #location{
            margin-left: 45px;
            width: 175px;
            height: 25px;
        }
        #language{
            width: 175px;
            height: 25px;
        }
        .btn{
            margin-left: 100px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #3366cc;
            color: #ebf0fa;
            cursor: pointer;
        }
        .btn:hover{
            box-shadow: 5px 10px 8px #050a14;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="results" method="post">
            Your name: 
            <input type="text" name="name" class="name"><br>
            Dojo Location: 
            <select name="location" id="location">
                <option name="location" value="location">Mountain View</option>
                <option name="location" value="location">Palawan</option>
                <option name="location" value="location">La Union</option>
                <option name="location" value="location">Bataan</option>
            </select><br>
            Favorite Language: 
            <select name="language" id="language">
                <option name="language" value="language">JavaScript</option>
                <option name="language" value="language">PHP</option>
                <option name="language" value="language">Python</option>
                <option name="language" value="language">Java</option>
            </select><br>
            Comment (optional):<br>
            <textarea name="comment" id="" cols="40" rows="5" name="comment"></textarea><br>
            <input type="submit" name="submit" class="btn">
        </form>
    </div>
</body>
</html>