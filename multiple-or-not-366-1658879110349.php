<?php
    for($i=1; $i<1001; $i++) {
        if($i % 3 == 0){
            $a = "Multiple";
        }else{
            $a = "Not multiple";
        }
        echo $i." => ".$a."<br>";
    }
?>