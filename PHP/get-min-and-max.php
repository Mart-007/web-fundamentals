<?php 

    function get_max_and_min($array){
        foreach( $array as $value){
            if($value > 300){
                $array[4] = "'max' => $array[4]";
            }
            elseif($value < 1.20){
                $array[6] ="'min' => $array[6]" ;
            }else{
                
            }
        }
        return $array;
    }
    $number = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
    $results = get_max_and_min($number);
    var_dump($results);
?>