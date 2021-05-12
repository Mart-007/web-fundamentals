<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mrep</title>
</head>
<body>
    <h3><?= $name; ?></h3>
    <h3><?= $age; ?>, <?= $location; ?></h3>
    <h3><?=count($hobbies) . ' '?>Hobbies</h3>
    <ul>
    <?php for($i=0; $i<count($hobbies); $i++){ ?>
        <li><?= $hobbies[$i] ?></li>
    <?php }?>
</body>
</html>



