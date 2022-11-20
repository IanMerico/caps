<?php 
   class Main extends CI_Controller {
    
      public function index() 
      {
         date_default_timezone_set('Asia/Hong_Kong');
         $date = date('Y/m/d g:i A');
         $messages ='';
      
         $newdata = array(
                           'Money' => 500,
                           'Chances' => 10,
                           'dates' =>  $date,
                           'display' => array (
                           array('color' =>'','msg' =>  $messages )
         ) 
         );
         $this->session->set_userdata($newdata);
         $this->load->view('index',$newdata);      
      }
      public function process()
      {
         $x = 0;
         $y = 0;
         $result = 0;
         $bet = 0;
         $msg = '';
         $chance = $this->session->userdata('Chances'); 

         if($this->input->post('risk')) {

            if($this->input->post('risk') == 'low') {
               $x = -25;
               $y = 100;
               $msg = "Low Risk";  
            }elseif ($this->input->post('risk') == 'moderate') {
               $x = -100;
               $y = 1000;
               $msg = "Moderate";
            }elseif ($this->input->post('risk') == 'high') {
               $x = -500;
               $y = 2500;
               $msg = "High";
            }elseif ($this->input->post('risk') == 'severe') {
               $x = -3000;
               $y = 5000;
               $msg = "Severe";
            }

            if($chance > 0) {

               $bet = rand($x, $y);
               $Money = $this->session->userdata('Money');
               $result = $Money + $bet;
               $this->session->set_userdata('Money',$result);
               $chance --;
               $this->session->set_userdata('Chances',$chance); 

               if($bet >= 0) {
                  $color = 'success';
               }else {
                  $color = 'danger';
               }
               
               $messages = " You pushed ".$msg. ". Value is " .$bet. ". Your current money now is " .$result. " with " .$chance .
                  " chance(s) left";
               $arr_msg = array('color'=> $color ,'msg' => $messages);
               $display =  $this->session->userdata('display'); 
               array_push($display,$arr_msg);
               $this->session->set_userdata('display',$display); 
            }
            $this->load->view('index'); 
         }  
      } 
      public function reset() 
      {
         $newdata = array(
                           'Money' => 500,
                           'Chances' => 10,
                           'date' => $date,
                           'display' => array (
                           array('color' =>'','msg' =>  $messages )
                        ) 
         );
         $this->session->unset_userdata($newdata);
         $this->load->view('index'); 
      }
   }
?>