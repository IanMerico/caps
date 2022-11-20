<?php 
class Main extends CI_Controller {
   public function __construct() {
      CI_Controller::__construct();
      $this->load->library('session');
      $this->load->helper('url');
      $this->load->library('form_validation');
      $this->load->model('Bookmarks');
      $this->load->database();
   }
     public function index()
     {
      $this->load->model('Bookmarks');
      $all['value'] = $this->Bookmarks->get_all_bookmarks();
      $all['errors'] = $this->session->flashdata();
      $this->load->view('index', $all);
     }
     public function show($id) {
         $this ->output ->enable_profiler(TRUE);
         $this ->load ->model("Bookmarks");
         $bookmark_id = $id;
         $bookmark = $this->Bookmarks -> get_bookmark_by_id($bookmark_id);
     }
     public function add() {
         $this ->output->enable_profiler(TRUE);
         $this ->form_validation->set_rules("name", "Name", "trim|required");
         $this ->form_validation->set_rules("url", "URL", "trim|required");
         if($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect("http://localhost/Bookmarks/");
         } else {
            $bookmark_details = array("name" => $this->input->post('name'),
                                       "url" => $this->input->post('url'),
                                       "folder" => $this->input->post('type'));
            $add_bookmark = $this->Bookmarks ->add_bookmark($bookmark_details);
            if($add_bookmark === TRUE) {
               $this ->session->set_flashdata('success',"Bookmark added");
               redirect("http://localhost/Bookmarks/");
            }
         }
     }
     public function show_delete() {
         if($this -> input ->post('action') == 'del') {
            $this-> load ->model("Bookmarks");
            $bookmark_id = $this->input->post('delete');
            $results['result'] = $this-> Bookmarks-> get_bookmark_by_id($bookmark_id);
            $this ->load->view('destroy', $results);
         }
     }
     public function destroy($bookmark_id) {
         if($this ->input->post('btn') == 'YES') {
            $this->load->model("Bookmarks");
            $this->Bookmark->delete_bookmark($bookmark_id);
            var_dump($bookmark_id);
            redirect("Bookmarks");
         } else {
            redirect("Bookmarks");
         }
     }

    
}
?>