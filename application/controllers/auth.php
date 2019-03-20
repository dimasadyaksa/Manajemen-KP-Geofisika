<?php

class auth extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_login');
    }
            
    function login()
    {
        if(isset($_POST['submit'])){
            
            //proses login
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $hasil = $this->model_login->login($username, $password);
            if($hasil==1)
            {
                $this->session->set_userdata(array('status_login'=>'oke'));
                redirect('welcome');
            }
            else if($hasil==0){
                $this->load->view('login/index');

            }
    }
    else{
        $this->load->view('login/form_login');
    }
    }
    function logout(){
        session_destroy();
        redirect('welcome');
    }
}