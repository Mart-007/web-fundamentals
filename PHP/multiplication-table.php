<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     $row{
        background-color: gray;
    } 
</style>
<body>
<?php
echo "<table border =\"1\" style='border: solid black 2px'>";
	for ($row=1; $row < 10; $row++) { 
        
		echo "<tr> \n";
		for ($col=1; $col <10; $col++) { 
		    $p =  $col * $row ;
		   echo "<td> $p </td> \n";
		   	} 
	  	    echo "</tr>";
             
		}
		echo "</table>";
?>
</body>
</html>

