<!-- 1. What do you think will be the output of below code? Try to guess before running it! -->
<?php
    $list = array(2,4,6,8);
    foreach($list as $key => $value)
    {
         echo $key . " - " . $value ."<br />";
    }
?>
<!-- Output
0 - 2
1 - 4
2 - 6
4 - 8 -->

<!-- 2. What would be the output of the following code? Try to guess before running it! -->
<?php
    $list = array(2,4,6,8);
    foreach($list as $value)
    {
        echo $value ."<br />";
    }
?>
<!-- Output
0 - 2
1 - 4
2 - 6
4 - 8 -->

<!-- 3. What will be the output of this? Again, guess the output before running the code. -->
<?php
    $fruits= array("A" => "Apple", "B" => "Banana");
    foreach($fruits as $key => $value)
    {
         echo $key . " - " . $value ."<br />";
    }
?>
<!-- Output
A - Apple
B - Banana -->

<!-- 4. How about the following code? Try to guess the output of the code before running it! -->
<?php
    $fruits= array("A" => "Apple", "B" => "Banana");
    foreach($fruits as $key => $value)
    {
         echo $value ."<br />";
    }
?>
<!-- Output
Apple
Banana -->

<!-- 5. Let's change the echo statement. Make a guess! -->
<?php
    $fruits= array("A" => "Apple", "B" => "Banana");
    foreach($fruits as $key => $value)
    {
         echo $key ."<br />";
    }
?>
<!-- Output
A
B -->

<!-- 6. Okay. Now let's make it more challenging. What would be the output of the following code? -->
<?php
    $plots = array( array("a1", "a2", "a3"), array("b1", "b2", "b3"), array("c1", "c2", "c3") );
    foreach($plots as $key => $value)
    {
         echo "Key is {$key}<br />";
         echo "logging the value";
         var_dump($value);
    }
?>
<!-- Output
(incorrect guessing for number 6)
Key is 0
logging the valuearray(3) { [0]=> string(2) "a1" [1]=> string(2) "a2" [2]=> string(2) "a3" } Key is 1
logging the valuearray(3) { [0]=> string(2) "b1" [1]=> string(2) "b2" [2]=> string(2) "b3" } Key is 2
logging the valuearray(3) { [0]=> string(2) "c1" [1]=> string(2) "c2" [2]=> string(2) "c3" }-->

<!-- 7.Now what about this? Again guess the output before running the code. -->
<?php
    $plots = array( array("a1", "a2", "a3"), array("b1", "b2", "b3"), array("c1", "c2", "c3") );
    foreach($plots as $value)
    {
         echo "logging the value";
         var_dump($value);
    }
?>
<!-- Output
Key is 0
logging the valuearray(3) { [0]=> string(2) "a1" [1]=> string(2) "a2" [2]=> string(2) "a3" } 
logging the valuearray(3) { [0]=> string(2) "b1" [1]=> string(2) "b2" [2]=> string(2) "b3" } 
logging the valuearray(3) { [0]=> string(2) "c1" [1]=> string(2) "c2" [2]=> string(2) "c3" }-->

<!-- 8. Okay. Now let's make it even harder. What would be the output of the following code? -->
<?php
    $nations = array( array("PH"=>"Philippines", "KR"=>"South Korea"), array("PHP"=>"Philippine peso", "KRW"=>"South Korean won"), array("Manila"=>"Maynilad", "Seoul"=>"Seorabeol") );
    foreach($nations as $key => $value)
    {
         echo "key is {$key}<br />";
         foreach($value as $key2=>$value2)
         {
                 echo $key2 ." - " . $value2."<br />";
         }
    }
?>

<!-- Output
key is 0
PH - Philippines
KR - South Korea
key is 1
PHP - Philippine peso
KRW - South Korean won
key is 2
Manila - Maynilad
Seoul - Seorabeol 
-->

<!-- 9. At last! What about this? -->
<?php
    $nations = array( array("PH"=>"Philippines", "KR"=>"South Korea"), array("PHP"=>"Philippine peso", "KRW"=>"South Korean won"), array("Manila"=>"Maynilad", "Seoul"=>"Seorabeol") );
    foreach($nations as $nation)
    {
         foreach($nation as $key=>$value)
         {
                 echo $key ." - " . $value."<br />";
         }
    }
?>

<!-- Output
PH - Philippines
KR - South Korea
PHP - Philippine peso
KRW - South Korean won
Manila - Maynilad
Seoul - Seorabeol 
-->



