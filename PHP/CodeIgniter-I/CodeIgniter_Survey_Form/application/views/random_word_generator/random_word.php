<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Word Generator</title>
</head>
<body>
    <div class="container">
        <form action="/random/rand_num" method="post">
            <h3>Random Word (attemp # <?= $count ?>)</h3>
            <h2><?= $string ?></h2>
            <input type="submit" class="btn" value="generate">
        </form>
    </div>
    
</body>
</html>