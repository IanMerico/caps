<?php
    class Feedback extends CI_Controller { 
        public function index() {
            $this->session->sess_destroy();
            $this->load->view('FeedbackForm');
        }
        public function login() {
            $data['name'] = $this->input->post('name'); 
            $data['courseTitle'] = $this->input->post('courseTitle'); 
            $data['score'] = $this->input->post('score'); 
            $data['reason'] = $this->input->post('reason'); 

            $datas = array( 'name' => $data['name'],
                            'courseTitle'=> $data['courseTitle'],
                            'score'=> $data['score'],
                            'reason'=> $data['reason']);

            if(empty($data['name']) || empty($data['courseTitle']) || empty( $data['reason'])) {
                
                    unset($_SESSION['Error']);
                    $this->session->set_flashdata('Error', 'Empty field cannot be blank');
                    redirect('http://localhost/FeedbackForm/');
            }
            $this->session->set_flashdata('success', 'Data successfully added');
            $this->load->view('Result', $datas);
        }
    }
?>