<?php
 $A = array(1, 2, "hello");

 function print_lists($arr){
    foreach( $arr as $key => $values){
        echo "<ul> $key " ,"<li>", "   $values  </li>  </ul> ,<br />";
    }   
 }

 print_lists($A);
?>