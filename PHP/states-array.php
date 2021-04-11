<html lang="en">
<head>
<meta charset="utf-8">
<title>State Array</title>
</head>
<body>
<?
$states = array("CA", "WA", "VA", "UT", "AZ");
     $size = sizeof($states);    
      for($i=0; $i<$size; $i++){
        $size = 1;
       echo "<select>
                <option value= $state[$i]> $states[0]<option>
                <option value= $states[$i]> $states[1]<option>
                <option value= $states[$i]> $states[2]<option>
                <option value= $states[$i]> $states[3]<option>       
            </select>";  
      } 
       ?> 
<form>
<br>
    <select>
        <option selected="selected">Choose one</option>
        <?php
            $states = array("CA", "WA", "VA", "UT", "AZ");
                foreach($states as $item){
                    echo "<option value='($item)'>$item</option>";
            }
        ?>
    </select>
</form>
<?
$states = array("CA", "WA", "VA", "UT", "AZ", "NJ", "NY", "DE");
     $size = sizeof($states);    
      for($i=0; $i<$size; $i++){
        $size = 1;
       echo "<select>
                <option value= $states[$i]> $states[0]<option>
                <option value= $states[$i]> $states[1]<option>
                <option value= $states[$i]> $states[2]<option>
                <option value= $states[$i]> $states[3]<option>       
                <option value= $states[$i]> $states[4]<option>       
                <option value= $states[$i]> $states[5]<option>       
                <option value= $states[$i]> $states[6]<option>       
                <option value= $states[$i]> $states[7]<option>       
              </select>";  
      } 
       ?>

</body>
</html>
 
 
 
 
 