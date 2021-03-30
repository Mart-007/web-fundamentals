<?php
// 1. My guess: correct
// 0 - 1
// 1 - 3
// 2 - 5
// 3 - 7 
// $x = array(1,3,5,7);
// foreach($x as $key => $value)
// {
//   echo $key . " - " . $value ."<br />";
// }

//2. my guess: correct
// 1
// 3
// 5
// 7
// $x = array(1,3,5,7);
// foreach($x as $value)
// {
//   echo $value ."<br />";
// }

//3. my guess: correct
// hi - dojo
// awesome - game
// $x = array("hi" => "Dojo", "awesome" => "game");
// foreach($x as $key => $value)
// {
//   echo $key . " - " . $value ."<br />";
// }

//4. my guess: correct
// Dojo
// game
// $x = array("hi" => "Dojo", "awesome" => "game");
// foreach($x as $key => $value)
// {
//   echo $value ."<br />";
// }

//5. my guess: correct
// hi
// awesome
// $x = array("hi" => "Dojo", "awesome" => "game");
// foreach($x as $key => $value)
// {
//   echo $key ."<br />";
// }

//6. my guess: wrong
// Key is 1
// var_dumping value int 1 3 5
//Answer: 
// Key is 0
// var_dumping valuearray(3) { [0]=> int(1) [1]=> int(3) [2]=> int(5) } Key is 1
// var_dumping valuearray(3) { [0]=> int(2) [1]=> int(4) [2]=> int(6) } Key is 2
// var_dumping valuearray(3) { [0]=> int(3) [1]=> int(6) [2]=> int(9) }
// $x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
// foreach($x as $key => $value)
// {
//   echo "Key is {$key}<br />";
//   echo "var_dumping value";
//   var_dump($value);
// }

//7. my guess: Correct
// var_dumping valuearray(3) { [0]=> int(1) [1]=> int(3) [2]=> int(5) } 
// var_dumping valuearray(3) { [0]=> int(2) [1]=> int(4) [2]=> int(6) } 
// var_dumping valuearray(3) { [0]=> int(3) [1]=> int(6) [2]=> int(9) }
// $x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
// foreach($x as $value)
// {
//   echo "var_dumping value";
//   var_dump($value);
// }

//8. my guess: wrong
//key is 0
//dude - fun

//Answer:
// key is 0
// hi - Dojo
// game - awesome
// key is 1
// dude - fun
// play - what?
// key is 2
// no - way
// i am - confused?

// $x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
// foreach($x as $key => $value)
// {
//   echo "key is {$key}<br />";
//   foreach($value as $key2=>$value2)
//   {
//     echo $key2 ." - " . $value2."<br />";
//   }
// }

//8. my guess: Correct
// hi - Dojo
// game - awesome
// dudue - fun
// play - what?
// no - way
// i am - confused?
$x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
foreach($x as $y)
{
  foreach($y as $key=>$value)
  {
    echo $key ." - " . $value."<br />";
  }
}
?>