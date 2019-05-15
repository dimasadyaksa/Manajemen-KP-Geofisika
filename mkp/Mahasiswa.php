<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
  
  function __construct(){
  
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    //validasi jika user belum login
    if($this->session->userdata('email') != TRUE){
            echo "<script>
				alert('Anda tidak memiliki akses.');
				window.location='".site_url('login')."';
				</script>";
        }
  }

	public function index()
	{
		if($this->session->userdata('status')=='Mahasiswa'){
	      $this->load->view('mahasiswa/index');
	    }else{
	      echo "Anda tidak berhak mengakses halaman ini";
	      $this->load->view('back');
	    }

	}
	public function datadiri()
	{
		if($this->session->userdata('status')=='Mahasiswa'){
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_datadiri');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}





	public function Dashboard()
	{
		if($this->session->userdata('status')=='Mahasiswa'){
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_body');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}

	public function PembimbingDosen()
	{
		if($this->session->userdata('status')=='Mahasiswa'){
		$data['dataDosen'] = $this->Mahasiswa_model->tampilDosen();
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_pembimbing_dosen', $data);
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}

	public function Profil()
	{
		if($this->session->userdata('status')=='Mahasiswa'){
		$data['dataDiri'] = $this->Mahasiswa_model->get_by_id();
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_profil', $data);
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
	public function editProfil()
	{
		if($this->session->userdata('status')=='Mahasiswa'){
			$Nama=$this->input->post('Nama');
			$No_telp=$this->input->post('No_telp');
			$password=$this->input->post('password');

			$this->Mahasiswa_model->update_profil($Nama,$No_telp);
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}





	public function logbook()
	{
		if($this->session->userdata('status')=='Mahasiswa'){
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_logbook');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
	public function PLapangan()
	{
		if($this->session->userdata('status')=='Mahasiswa'){
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_pembimbing_lapangan');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
	public function TPraktik()
	{
		if($this->session->userdata('status')=='Mahasiswa'){
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_tempatPraktik');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
	// public function PembimbingDosen()
	// {
	// 	if($this->session->userdata('status')=='Mahasiswa'){
	// 	$this->load->view('mahasiswa/v_header');
	// 	$this->load->view('mahasiswa/v_sidebar');
	// 	$this->load->view('mahasiswa/v_PengantarPembimbingKP');
	// 	}else{
	// 		echo "Anda tidak berhak mengakses halaman ini";
	// 		$this->load->view('back');
	// 	}
	// }	
}
	