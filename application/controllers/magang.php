
<?php
class Magang extends CI_Controller {
 
 function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('Logbook_model'); // load model 
 }
 
 public function index() {
   $this->data['posts'] = $this->PostModel->getPosts(); // calling Post model method getPosts()
   $this->load->view('Pembimbing_Lapangan/v_logbook', $this->data); // load the view file , we are passing $data array to view file
 }
 
 
}
?>