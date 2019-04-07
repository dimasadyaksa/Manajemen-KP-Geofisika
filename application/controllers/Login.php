<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		
		$this->load->view('login/form_login');
	}
	

	public function proses_login()
	{
		$user=$this->input->post('username');
		$pass=$this->input->post('password');

		$ceklogin= $this->User_m->login($user,$pass);

		if($ceklogin){
			foreach ($ceklogin as $row) {
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('level', $row->level);
			
			if($this->session->userdata('level')==1){
				redirect('mahasiswa');
			}
			elseif($this->session->userdata('level')==2){
				redirect('Pembimbing_Dosen');
			}
			elseif($this->session->userdata('level')==3){
				redirect('Pembimbing_Lapangan');
			}
		
		}
	}
	else {
				echo "<script>
				alert('Login gagal, username atau password salah');
				window.location='".site_url('login')."';
				</script>";
			}
	}


	public function logout()
	{
		session_destroy();
        echo "<script>
				alert('Anda telah logout.');
				window.location='".site_url('dashboard')."';
				</script>";
	}
}