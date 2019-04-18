<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('email') == TRUE){
            echo "<script>
				alert('Anda harus logout terlebih dahulu.');
				window.location='".site_url('dashboard')."';
				</script>";
        }
		$this->load->view('login/form_login');
	}
	public function proses_login()
	{
		$user=$this->input->post('email');
		$pass=$this->input->post('password');

		$ceklogin= $this->User_m->login($user,$pass);

		if($ceklogin){
			foreach ($ceklogin as $row) {
			$this->session->set_userdata('email', $row->email);
			$this->session->set_userdata('status', $row->status);
			
			if($this->session->userdata('status')== 1){
				redirect('mahasiswa/index');
			}
			elseif($this->session->userdata('status')== 2){
				redirect('Pembimbing_Dosen/index');
			}
			elseif($this->session->userdata('status')== 3){
				redirect('Pembimbing_Lapangan');
			}
			elseif($this->session->userdata('status')== 4){
				redirect('Koordinator');
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
	public function menu()
	{
		$this->load->view('menu');
	}
}