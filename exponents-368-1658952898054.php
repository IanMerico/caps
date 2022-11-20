<!-- Part I: Create a function called 'exponential()' that reads each value in an array and returns a 
new array where each value has been computed with default exponent 3. -->
<?php
    $digits = array(3, 12, 40);
    function exponential($digits)
    {
        //insert logic here
        $new_arr = array();
        foreach ($digits as $results) {
            $new_arr[] = pow($results, 3);
        }
        return $new_arr;
    }
    $result = exponential($digits);
    var_dump($result); 
    /* expected output:
            array (size=3)
            0 => int 27
            1 => int 1728
            2 => int 27000
    */
?>

<!-- Part II: Modify this function so that you can pass an additional argument to this function. 
The function should compute each value in the array by this additional argument for exponent. -->
<?php
    $digits = array(8, 11, 4);
    function exponential($digits, $arg)
    {
        //insert logic here
        $new_arr = array();
        foreach ($digits as $results) {
            $new_arr[] = pow($results, $arg);
        }
        return $new_arr;
    }
    $result = exponential($digits, 4);
    var_dump($result); 
    /* this should dump which contains [4096, 14641,  256]. */
?>