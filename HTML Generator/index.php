<?php

    $item_arr = array("name" => "Bag", "price" => "250", "stocks" => "10");
    $fruits_arr = array("Apple", "Banana", "Cherry");

    class HTML_Generator {

        function render_input($arr) {
            foreach ($arr as $keys => $result) {
?>
                <label for="<?= $keys ?>"><?= $keys ?></label>
                <input type="text" name="<?= $keys ?>" value="<?= $result?>">
<?php
            }
        }

        function render_list($arr, $list) {
            if($list == "ordered") { 
                echo "<ol>";     
            } elseif($list == "unordered") {
                echo "<ul>";
            }

            foreach ($arr as $result) {
                echo "<li>$result</li>";
            }

            if($list == "ordered") {
                echo "</ol>"; 
            } elseif($list == "unordered") {
                echo "</ul>";
            }
        }
    }
    $HTML_Generator = new HTML_Generator();
    $HTML_Generator -> render_input($item_arr);
    $HTML_Generator -> render_list($fruits_arr, "ordered");
    $HTML_Generator -> render_list($fruits_arr, "unordered");
?>