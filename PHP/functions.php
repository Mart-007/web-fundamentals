<?php
 function print_array($array){
    echo "There are" . count($array) ." values in the array. <br />";
    foreach( $array as $value){
        echo $value . "<br />";
    }
 }

 $sample = array("Mart", "Bords", "Jabords");
 print_array($sample);

 $sample = array("Mart", "Bords", "Jabords");
 print_array($sample);

 $sample = array("Mart", "Bords", "Jabords");
 print_array($sample);

 //What the return statement does is it returned the value "stuff" along with stuff's data type and gave it to my_function(). It's as if the function itself IS "stuff" plus data type. With this in mind, we can actually do this:
    // function my_function() {
    //     $things = "stuff";
    //     return $things;
    // }
    // $some_variable = my_function();s
    // echo $some_variable;
    // //prints out "stuff"

//If we translate the car manufacturing process in codes without using functions (say we produce 2 unique cars), our code would look something like below:
// $raw_materials = array(
//     array(
//       'rubber' => 'Natural Rubber',
//       'metal' => 'Alloy',
//       'paint' => 'Green'
//     ),
//     array(
//       'rubber' => 'Nitrile',
//       'metal' => 'Brass',
//       'paint' => 'Red'
//     )
//  );
//  foreach($raw_materials as $raw_material) {
//    echo "<p>Just produced a {$raw_material['paint']} car that used {$raw_material['metal']} for the body and {$raw_material['rubber']} for the car's tires.</p>";
//  }

// function car_factory($raw_materials) {
//     $cars = array();
//     foreach($raw_materials as $raw_material) {
//        $cars[] = "<p>Just produced a {$raw_material['paint']} car that used {$raw_material['metal']} for the body and {$raw_material['rubber']} for the car's tires. </p>";
//     }    
//     return $cars;
// }
// $raw_materials = array(
//    array(
//       'rubber' => 'Natural Rubber',
//       'metal' => 'Alloy',
//       'paint' => 'Green'
//    ),
//    array(
//      'rubber' => 'Nitrile',
//      'metal' => 'Brass',
//      'paint' => 'Red'
//    )
// );
// $cars = car_factory($raw_materials);
// var_dump($cars);

?>
