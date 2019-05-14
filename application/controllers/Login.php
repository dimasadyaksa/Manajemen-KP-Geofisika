<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('email') == TRUE){

				if($this->session->userdata('status')== 'Mahasiswa'){
					redirect('mahasiswa');
				}
				elseif($this->session->userdata('status')== 'Pembimbing Dosen'){
					redirect('Pembimbing_Dosen');
				}
				elseif($this->session->userdata('status')== 'Pembimbing Lapangan'){
					redirect('Pembimbing_Lapangan');
				}
				elseif($this->session->userdata('status')== 'Koordinator'){
					redirect('Koordinator');
				}
        }else{

			$this->load->view('login/form_login');
        }
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
				$this->session->set_userdata('nim', $row->nim);
				$this->session->set_userdata('nip', $row->nip);
				
				if($this->session->userdata('status')== 'Mahasiswa'){
					redirect('mahasiswa');
				}
				elseif($this->session->userdata('status')== 'Pembimbing Dosen'){
					redirect('Pembimbing_Dosen');
				}
				elseif($this->session->userdata('status')== 'Pembimbing Lapangan'){
					redirect('Pembimbing_Lapangan');
				}
				elseif($this->session->userdata('status')== 'Koordinator'){
					redirect('Koordinator');
				}
			}
		}else {
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
				window.location='".site_url()."';
				</script>";
	}
	public function menu()
	{
		$this->load->view('menu');
	}
}