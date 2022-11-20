<?php
    $numbers = array(13, 143, 88, 65, 120);
    $sum = 0 ;
    for($i = 0; $i < count($numbers); $i++) {
        $sum = $sum + $numbers[$i] / count($numbers);
    }
    echo "The mean of the values in the array is : ".$sum; 
?>