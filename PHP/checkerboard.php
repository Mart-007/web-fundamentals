<?php
 $size = 8;
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Checkerboard</title>
     <style>
     body{
         background-color: #fffaaa;
     }
     div{
         display: inline-block;
         width: 30px;
         height: 30px; 
     }
         
    .color_1{
        background-color: red;
    }   
    .color_2{
        background-color: black;
    }
     </style>
 </head>
 <body>
    <?php 
        for($i=0;$i<$size; $i++) { ?>
        <div>
    <?php 
        for($j=0;$j<$size; $j++) { ?>
        <div class="color_<?= ($i+$j)%2+1 ?>"></div>
    <?php } ?>
        </div>
    <?php } ?>

    
 </body>
 </html> 