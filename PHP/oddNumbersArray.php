<?php
$sumOdd = 0;

foreach (range(0, 20000) as $number) {

    if (0 === $number % 1) {
        var_dump($sumOdd += $number . '<br>');
    }    
}

echo '<br> sumOdd = '.$sumOdd;
?>