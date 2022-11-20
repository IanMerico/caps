<?php
    function Shoot_the_ball() { 
        $success = 0;
        $epicfail = 0;?>
        <h2>Practice starts...</h2>
        <?php for($i = 1; $i < 1001; $i++) {

            $random = rand(0, 1);  

            if($random == 0) {   
                    $result = "Success!"; 
                    $success++;
             } else { 
                $result = "Epic Fail!";
                $epicfail++; 
            } ?>

            <p>Attempt #<?=$i?>: Shooting the ball... <?= $result ?> ... Got <strong><?=$success?></strong>x success  
            and <strong><?=$epicfail?></strong>x epic fail(s) so far</p> 

        <?php } ?>
        <h2>Practice ended.</h2>
    <?php }
        Shoot_the_ball();
?>
