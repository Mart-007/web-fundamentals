<?php

// strlen function
// $str = "This is a string";
// echo strlen($str);

//strtolower function
// $str = "This is A String";
// echo strtolower($str);

//strtoupper function
// $str = "This is a string";
// echo strtoupper($str);

//ucwords fucntion
// $str = "This is a string";
// echo ucwords($str);

//str_replace funtion
// $phrase  = "You should eat fruits, vegetables, and fiber every day.";
// $healthy = array("fruits", "vegetables", "fiber");
// $yummy   = array("pizza", "beer", "ice cream");

// echo $newphrase = str_replace($healthy, $yummy, $phrase);

//stristr funtion
// echo stristr("Hello world!","WORLD");

//strpos function
// $newstring = 'abcdef abcdef';
// echo $pos = strpos($newstring, 'f', 1); // $pos = 7, not 0

//explode  function
// $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
// $pieces = explode(" ", $pizza);
// echo $pieces[0]; // piece1
// echo $pieces[1]; // piece2

//implode  function
// $a1 = array("1","2","3");
// $a2 = array("a");
// $a3 = array();

// echo "a1 is: '".implode("','",$a1)."'<br>";
// echo "a2 is: '".implode("','",$a2)."'<br>";
// echo "a3 is: '".implode("','",$a3)."'<br>";

// -------- Functions for Arrays -------------

//shuffle function
// $numbers = range(1, 20);
// shuffle($numbers);
// foreach ($numbers as $number) {
//     echo "$number ";
// }

//sort function
// $numbers = range(1, 20);
// sort($numbers);
// foreach ($numbers as $number) {
//     echo "$number ";
// }

//count function
// $numbers = range(1, 20);
// count($numbers);
// foreach ($numbers as $number) {
//     echo "$number ";
// }

//explode function
// $input1 = "hello";
// $input2 = "hello,there";
// $input3 = ',';
// var_dump( explode( ',', $input1 ) );
// var_dump( explode( ',', $input2 ) );
// var_dump( explode( ',', $input3 ) );

//implode function
// $str = array("1","2","3","4","5","6","7","8","9");
// echo implode("-", $str);

//array_pop function
// $str = array("1","2","3","4","5","6","7","8","9");
// echo array_pop($str);

//array_push function
// $str = array("1","2","3","4","5","6","7","8","9");
// echo array_push($str);

//--------- function for numbers ----------

//is_numeric function
// $num = 10;
// echo is_numeric($num);

//rand(start, end) function
// $r = rand(0,255);
// $g = rand(0,255);
// $b = rand(0,255);
//  echo  '<body style="background-color:' . "rgb($r, $g, $b)" . '">';

//--------Additional Functions -----------
//isset function
// $a = 0;
// True because $a is set
// if (isset($a)) {
//   echo "Variable '$a' is set.<br>";
// }

//empty(var) function
// $a = 123;
// echo empty("This is empty" . $a);

?>