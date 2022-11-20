<?php
    function random() {
        $score = rand(1,100);
        if($score >= 95 && $score <= 100){
            echo "<h1>Score: $score </h1> <h2>Score between 95-100: What an excellent singer!</h2><br>";  
        }
        else if($score >= 80 &&  $score <= 94) {
            echo "<h1>Score: $score </h1> <h2>Score between 80-94: You're getting better!</h2><br>"; 
        }
        else if($score >= 50 &&  $score <= 79){
            echo "<h1>Score: $score </h1> <h2>Score between 50-79: Practice more!</h2><br>"; 
        }else {
            echo " <h1>Score: $score </h1> <h2>Score below 50: Never sing again, ever!</h2><br>"; 
        }  
    }
    for($i = 1; $i < 51; $i++){
        random();
    }
?>
