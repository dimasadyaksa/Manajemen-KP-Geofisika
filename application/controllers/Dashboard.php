<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('username') != TRUE){
			$this->load->view('index');
		}else{
			redirect('Dashboard/logged');
		}
	}
	public function logged()
	{
		if($this->session->userdata('username') != TRUE){
            echo "<script>
				alert('Anda tidak memiliki akses.');
				window.location='".site_url('login')."';
				</script>";
        }
		$this->load->view('v_logged');
		$this->load->view('v_sidebar');
		$this->load->view('v_body');
	}
}
