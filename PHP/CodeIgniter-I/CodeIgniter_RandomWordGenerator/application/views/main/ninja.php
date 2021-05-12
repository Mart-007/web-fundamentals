<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninjas</title>
</head>
    <style>
        body{
            background-color: #6699cc;
        }
        .container{
            display: inline-block;
            margin-left: 300px;
        }
        img{
            margin: 10px;
        box-shadow: 5px 10px 18px #888888;
        }
        h1{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
<body>
    <h1>The Great Ninjas</h1>
    <div class="container">
        <img src="<?php echo base_url()?>/assets/images/n1.jpg" alt="ninja 1" width="240" height="250">
        <img src="<?php echo base_url()?>/assets/images/n2.jpg" alt="ninja 2" width="220" height="250">
        <img src="<?php echo base_url()?>/assets/images/n3.png" alt="ninja 3" width="220" height="250">
        <img src="<?php echo base_url()?>/assets/images/n4.jpg" alt="ninja 4" width="220" height="250">
        <img src="<?php echo base_url()?>/assets/images/n5.jpg" alt="ninja 4" width="220" height="250">
    </div>
</body>
</html>