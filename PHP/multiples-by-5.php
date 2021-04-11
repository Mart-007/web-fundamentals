<?php

function multiply($arr)
{ 
  foreach ($arr as $values){
    $values = $values * 5;
    echo $values . ' ';
  }
  $B = $arr + $arr;
  return $B;
}
$A = array(2,4,10,16);
$B = multiply($A);
var_dump($B);

?>