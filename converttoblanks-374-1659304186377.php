<?php
    function convert_to_blanks() {
        $list = array(6, 1, 3, 5, 7);
        $a = "_ ";
        for($i = 0; $i < count($list); $i++) {
            echo str_repeat($a, $list[$i]).'<br>';
        }
    }
    convert_to_blanks();
?>

<?php
    function convert_to_blanks() {
        $list = array(4, "Michael", 3, "Karen", 2, "Rogie");
        $a = "_ ";
        for($i = 0; $i < count($list); $i++) {
            if(is_numeric($list[$i]) == true) {
                echo str_repeat($a, $list[$i]).'<br>';
            }
            else {
                for($j = 0; $j < strlen($list[$i]); $j++) {
                    if($j == 0 ) {
                        echo ($list[$i][0]);
                    } else {
                        echo $a;
                    }
                }
                echo "<br>";
            }
        }
    }
    convert_to_blanks();
?>