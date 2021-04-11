<?php

 function print_average($array){
     $number_of_value = count($array);
     $total = 0;

     foreach($array as $value){
         $total += $value;
     }
     $average = $total / $number_of_value;
     
     return $average;
 }

 $numbers = array(3, 13, 25, 52, 100);
 $average = print_average($numbers);
 echo $average;
?>