<?php
    session_start();
    $x = 0;
    $y = 0;
    $msg = "";
    
    if (isset($_POST['reset_game']) && ($_POST['reset_game']) == 'reset_game') {
        $_SESSION['Money'] = 500;
        $_SESSION['Chances'] = 10;
        $_SESSION['message'] = null;
        unset($_SESSION);
    }
    elseif (isset($_POST['risk'])) {

        if($_POST['risk'] == "low") {

            $x = -25;
            $y = 100;
            $msg = "Low Risk";  

        } elseif ($_POST['risk'] == "moderate") {

            $x = -100;
            $y = 1000;
            $msg = "Moderate Risk"; 

        } elseif ($_POST['risk'] == "high") {

            $x = -500;
            $y = 2500;
            $msg = "High Risk"; 

        } elseif ($_POST['risk'] == "severe") {

            $x = -3000;
            $y = 5000;
            $msg = "Severe Risk"; 
        }

        if($_SESSION['Chances'] > 0) {

            $_SESSION['Bet'] = rand($x, $y);
            $_SESSION['Money'] = $_SESSION['Money'] + $_SESSION['Bet'];
            $_SESSION['Chances']--;
            $data = logs_messages( $msg,  $_SESSION['Bet'], $_SESSION['Money'], $_SESSION['Chances']);
            $_SESSION['message'][] = $data;

        } 
    }
    
    function logs_messages($Risk, $value, $money, $chances)
    {
        $color = ($value >= 0 ) ? "success" : "danger";
        $msg = " You pushed ".$Risk. ". Value is " .$value. ". Your current money now is " . $money. " with " .$chances .
        " chance(s) left";

        $logs_messages = ['msg' => $msg, 'color' => $color];

        return $logs_messages;
    }
    header('Location: index.php');
?>