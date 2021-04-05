<!DOCTYPE html>
<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='style.css'/>
		<title>Coin Flips</title>
	</head>
	<body>
	<p>We are going to flip a coin until we get three heads in a row!</p>
	<?php    
      $flipCount = 0;
      do {
          $flip = rand(0,1);
          $flipCount ++;
          if ($flip){
              echo "<div class=\"coin\">H</div>";
          }
          else {
              echo "<div class=\"coin\">T</div>";
          }
      } while ($flip);
      $verb = "were";
      $last = "flips";
      if ($flipCount == 1) {
          $verb = "was";
          $last = "flip";
      }
      echo "<p>There {$verb} {$flipCount} {$last}!</p>";
    
	?>
    </body>
</html> 