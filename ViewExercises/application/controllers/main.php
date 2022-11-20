<?php 
class Main extends CI_Controller {
   //  //5. When the user visits "/" (e.g. localhost/), have this request be handled by the index method in the 
   //  // Main controller, echoing "I am Main Class!".
   //   public function index()
   //   {
   //      //    echo "Hi Class!";
   //      echo "I am Main Class!";
   //   }
   //   //1. When the user visits "/main/hello", have the request be handled by hello method in the class called 'Main' 
   //  //  (in the controller folder).  Have this method simply echo "Hello World!"
   //   public function hello()
   //   {
   //         echo "Hello World!";
   //   }
   //  // 2. When the user visits "/main/say/hi", have say method in the Main class (in the controller folder) 
   //  // handle this request.  Have this method simply echo "HI".
   //  public function say()
   //   {
   //         echo "Hi";
   //   }
   //   //3. When the user visits "/main/say_anything/___", whatever was in ___, have this be simply be echoed.  
   //  //  For example, if the user visit "/main/say_anything/awesome", the http response should simply be "AWESOME" all in capital.
   //  public function say_anything($say)
   //   {
   //      echo strtoupper($say);
   //   }
   //  //4. When the user visits "/main", have this request be handled by the index method in the Main controller.  
   //  // Have it simply say "I am Main Class!".
   //  public function main()
   //   {
   //      echo "I am Main Class!";
   //   }
   //  //6. When the user visits "/main/danger", have this request be handled by a method called 'danger' in the Main controller.  
   //  // Have it simply redirect back to "/main"
   //  public function danger()
   //  {
   //  //some logic that may do some form validations, setting sessions, etc
   //      redirect('/main');
   //  }

    public function world()
      {
        $this->load->view('world');
      }
    public function ninjas()
     {
      $this->load->view('ninjas');
     }
    public function ninjass($numbers)
    {
      for($i = 0; $i < $numbers; $i++) {
        $this->load->view('ninjas',$numbers);
      }
    }
    public function users() 
    {
      $this->load->view('index');
    }
    public function new() 
    {
      $this->load->view('new');
    }
    public function create() 
    {
      if(isset($_POST['action'])  == 'enter') {
        $this->load->view('create');
      }
      else {
        redirect('http://localhost/ViewExercises/main/users/new');
      }
    }
    public function count() 
    {
      $counter = $this->session->userdata('counter');
      if($counter !== TRUE) {
        $counter += 1; 
        
      }else {
          $counter = 0;
      }
      $recount = array('counter' => $counter);
      $this-> session -> set_userdata($recount);
      $this->load->view('count',$recount);
      
      if(isset($_POST['action'])  == 'reset') {
        $this->session->unset_userdata('counter');
        $this->load->view('reset');

      }
    }
    public function reset() 
    {     
      $msg = "The session has been reset";
      $resets = array('resetx' => $msg);
      $this->session->flashdata($resets);
      $this->session->unset_userdata('counter');
      $this->load->view('reset',$resets);

    }
    public function say($says, $num)
    {
      $say = array('talk' => $says, 'number' => $num);
      for($i = 0; $i < $num; $i++) {
        $this->load->view('say',$say, $num);
      }
      
    }
    public function mprep()
     {
          $view_data = array(
               'name' => "Michael Choi",
               'age'  => 44,
               'location' => "Seattle, WA",
               'hobbies' => array( "Basketball", "Soccer", "Coding", "Teaching", "Kdramas")
           );
           $this->load->view('mprep', $view_data);
     }
    
}
?>