<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy</title>
    <link rel="stylesheet" href="../../assets/css/course.css">
</head>
<body>
    <div class="container">
        <h2>Are you sure you want to delete the following course?</h2><br>
        <p>Name: </p>
        <p><?= $course['name']?></p>
        <p>Description: </p>
        <p>
<?php   if(!empty($course['description'])){
            echo $course['description'];
        }else{
            echo '(No Description available)';
        } ?>
        </p>
        <form action="/courses/delete/<?= $course['id']?>">
            <input type="submit" class="no_btn" value="No">
            <input type="submit" class="yes_btn" value="Yes! I want to delete this">
        </form>
    </div>
</body>
</html>