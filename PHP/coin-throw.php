
<?php  
    $head = 0;
    $tail = 0;
    for($i = 1; $i<5000; $i++){
        $flip = rand(0,1);
        if($flip == 1){
            $head++;
            echo "<h5> Attempt #$i It's a head!... Got $head heads(s) so far and $tail tail(s) so far</h5>";
        } 
        else{
            $tail++;
            echo "<h5> Attempt #$i It's a tail!... Got $tail tail(s) so far and $head head(s) so far</h5>";
        }
    }
?>