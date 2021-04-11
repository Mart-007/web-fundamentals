<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <style>
        body{
            background-color: #0e1300;
        }
        form{
            margin: 350px 650px; 
            border: solid  #ccccb3 1px;
            min-height: 330px;
            width: 400px;
        }
        .your_name{
            margin: 20px;
            margin-left: 30px;
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #ccccb3;
        }
        .name{
            margin: 20px 180px;
        }
        .dojo_location{
            margin: 10px;
            margin-left: 30px;
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color:  #ccccb3;
        }
        #dojo_location{
            margin-top: 10px;
            margin-left: 180px;
        }
        input[type=text]{
            height: 20px;;
        }
        select{
            width: 176px;
            height: 25px;
        }
        .fav_langauge{
            margin-top: 30px;
            margin-left: 30px;
            width: 150px;
            font-family: Arial, Helvetica, sans-serif;
            display: inline-block;
            color:  #ccccb3;
        }
        #fav_language{
            margin-top: 30px;
            position: absolute;
        }
        .comment{
            margin-top: 30px;
            margin-left: 30px;
            width: 150px;
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color:  #ccccb3;
        }
        #comment{
            margin-top: 50px;
            margin-left: 30px;
        }
        .btn{
            margin-top: 8px;
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
    <form action="process.php" method="post">
        <label for="your_name" class="your_name">Your name:</label>
        <input type="text" name="name" class="name">
        <label for="dojo_location" class="dojo_location">Dojo Location:</label>
         <select name="location" id="dojo_location">
            <option value="mountain view" >Mountain View</option>
            <option value="Mountain province" >Mountain province</option>
            <option value="Bohol chocolate hills" >Bohol chocolate hills</option>
            <option value="Tarlac Mountain" >Tarlac Mountain</option>
        </select>
        <label for="fav_langauge" class="fav_langauge">Favorite Language:</label>
        <select  name="language"id="fav_language">
            <option value="JavaScript" >JavaScript</option>
            <option value="PHP" >PHP</option>
            <option value="Python" >Python</option>
            <option value="C" >C#</option>
        </select>
        <div class="comment-section">
            <label for="comment" class="comment">Comment (optional):</label>
            <textarea name="comment" id="comment" cols="44" rows="5"></textarea>
        </div>
        <input type="submit" value="submit" class="btn">
    </form>
</body>
</html>