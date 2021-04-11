<?php
    function draw_stars($array){
       for($i=0; $i<count($array); $i++){
           if($array[$i] == $array[0]){
                echo $array[$i] = "<b> Part 1 </b> </br></br>**** </br>";
            }
            else if($array[$i] == $array[1]){
                echo $array[$i] = "****** </br>";
            }
            else if($array[$i] == $array[2]){
                echo $array[2] = "* </br>";
            }
            else if($array[$i] == $array[3]){
                echo $array[3] = "*** </br>";
            }
            else if($array[$i] == $array[4]){
                echo $array[4] = "***** </br>";
            }
            else if($array[$i] == $array[5]){
                echo $array[5] = "****** </br>";
            }
            else{
                echo $array[6] = "************************* </br></br><hr><b> Part 2 </b></hr></br></br>";
            }
        }
    }
$x = array(4, 6, 1, 3, 5, 7, 25);
$results = draw_stars($x);
echo $results;

    function draw_star_a($array_a){
        for($i=0; $i<count($array_a); $i++){
            if($array_a[$i] == $array_a[0]){
                echo $array_a[0] = "**** </br>";
            }
            else if($array_a[$i] == $array_a[1]){
                echo $array_a[1] = "ttt </br>";
            }
            else if($array_a[$i] == $array_a[2]){
                echo $array_a[2] = "* </br>";
            }
            else if($array_a[$i] == $array_a[3]){
                echo $array_a[0] = "mmmmmmm </br>";
            }
            else if($array_a[$i] == $array_a[4]){
                echo $array_a[4] = "***** </br>";
            }
            else if($array_a[$i] == $array_a[5]){
                echo $array_a[5] = "******* </br>";
            }
            else{
                echo $array_a[6] = "jjjjjjjjjjj";
            }
        }
    }
$x_a = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
$results_a = draw_star_a($x_a);
echo $results_a;

?>

