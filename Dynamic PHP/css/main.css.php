<?php 
    $p = rand(15, 25);
    $em = rand(40, 60);
    header('content-type:text/css; charset:UTF-8;');
?>
p {
    font-size:  <?= $p ?>px ;
}
em {
    font-size:  <?= $em ?>px ;
}
