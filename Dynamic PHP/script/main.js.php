<?php 
    header('content-type:text/javascript; charset:UTF-8;');
    $num = rand(100, 140);
    $alert = rand(100, 140);
?>

$(document).ready(function(){
  console.log("You are <?= $num ?>x better than before!");
  alert("You are <?= $alert ?>x better than before!");
});