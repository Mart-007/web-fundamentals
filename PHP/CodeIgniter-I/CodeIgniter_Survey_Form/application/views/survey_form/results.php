<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <style>
        body{
            background-color: #006600;
        }
        .container{
            margin-left: 650px;
            width: 500px;
        }
        .result{
            margin-top: 20px;
            padding: 20px;
            border: solid 1px black;
            background-color: #00b300;
            font-family: Arial, Helvetica, sans-serif;
        }
        h4{
            font-family: Arial, Helvetica, sans-serif;
            color: #b3ffb3;
            border-bottom: solid 2px #b3ffb3 ;
        }
        .content{
            margin-left: 90px;
            padding: 20px;
            width: 250px;
            border: solid 1px black;
            background-color: #b3ffb3;
        }
        a{
            padding: 5px;
            text-decoration: none;
            background-color: #00b300;
            color: #b3ffb3;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="result">
            Thanks for submitting this form! You have submitted this form
            <?= $this->session->userdata('count')?> times!
        </div>
        <h4>Submitted Information</h4>
        <div class="content">
            <?php
                if($this->session->userdata('name')){
                    echo "<p class=name>Name: " . "  ". $this->session->userdata('name') . "  </p>";
                }
                if($this->session->userdata('location')){
                    echo "<p class=location>Dojo Location:" . "  " . $this->session->userdata('location') . "</p>";
                }
                if($this->session->userdata('language')){
                    echo "<p class=language>Favorite Language:" . "  "  . $this->session->userdata('language') . "</p>";
                }
                if($this->session->userdata('comment')){
                    echo "<p class=comment>" . " " . $this->session->userdata('comment') . "</p>";
                }
            ?>
            <a href="process_form"> Go Back </a>
        </div>
    </div>
</body>
</html>