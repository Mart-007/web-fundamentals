<?php 
//  $students = array(
//              array( "Pedro", "chui", 27),
//              array( "Pedra", "choi", 26),
//              array( "Pedro", "chui", 24)
//              );

//  for($i = 0; $i < count($students); $i++){
//      for($j = 0; $j < count($students[$i]); $j++){
//          echo $students[$i][$j] . ' ';
//      }
//      echo '<br>';
     
//  }

 $students = array(
             array("first_name" => "Reymart", "last_name" => "Bordo", "age" => 24),
             array("first_name" => "Raylene", "last_name" => "Millenas", "age" =>   22),
             array("first_name" => "Reymart", "last_name" => "Bordo", "age" =>  23),
 );

 foreach ($students as $row){
     foreach ($row as $info => $value){
         echo $info . ' ' . $value . ' ';
     }
     echo "<br>";
 }

    // for($i = 0; $i < 10; $i++){
    //     echo $i . "<br>";{
    //         for($j=0; $j<4; $j++){
    //             echo $j;
    //         }
    //     }
    // }

?>
