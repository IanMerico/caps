<?php
    date_default_timezone_set("Asia/manila");
    class Countdown extends CI_Controller {
        
        function index() {
            $dates = new DateTime();
            $time = new DateTime();
            $t = $time->format('F j, Y h:i:s'); 
            $seconds = strtotime($t);
            $day = $dates->format('F j, Y');
            $data = array('date' => $day, 'time' => $seconds);
            $this->load->view('countdown', $data);
        }
    }
?>
