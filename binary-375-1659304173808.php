<?php  
    $binary = array( 1, 1, 0, 1, 1, 0, 1); 
    function get_count($binary){
        $zeroes = 0;
        $one = 0;
        for($i = 0; $i < count($binary); $i++) {
            if($binary[$i] == 0){
                $zeroes++;
            }
            else {
                $one++;
            }
        }
        $new_Arr = array("zeroes" => $zeroes,  "ones" => $one);
        return $new_Arr;
    }
    $output = get_count($binary); 
    var_dump($output); 
?>