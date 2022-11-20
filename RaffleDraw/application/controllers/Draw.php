<?php
    class Draw extends CI_Controller { 
        public function index() {
            
            $counter = $this->session->userdata('counter',);
            $ran = rand(1000000, 9999999);
            if($counter !== NULL) {
                $counter += 1; 
                
            }else {
                $counter = 0;
            }
            $recount = array('counter' => $counter);
            $this-> session -> set_userdata($recount);
            $views = array (
                            'random' => $ran,
                            'result' => $counter
                          );
            $this->load->view('RaffleDraw',  $views);
        }
        public function reset() {
            $this->session->unset_userdata('counter');
            // $this->load->view('RaffleDraw');
            redirect('/');
            // echo "reset!";
        }

    }
?>