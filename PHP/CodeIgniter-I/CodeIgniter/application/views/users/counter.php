<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $views = 0;
    $count='count.php';

    if(file_exists($count)){
        $views = (int)file_get_contents($count);
    }

    $views++;
    file_put_contents($count, $views);
?>