<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_Lapangan extends CI_Controller {
  
  function __construct(){
    parent::__construct();
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
		if($this->session->userdata('status')=='3'){
      		$this->load->view('pembimbing_lapangan/index');
    	}else{
      		echo "Anda tidak berhak mengakses halaman ini";
      		$this->load->view('back');
   	 	}
	}
	public function daftar_mahasiswa() 
	{
		if($this->session->userdata('status')=='3'){
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_daftar_m');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}	
	public function logbook() 
	{
		if($this->session->userdata('status')=='3'){
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_logbook');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}	
	public function Penilaian() 
	{
		if($this->session->userdata('status')=='3'){
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_penilaian');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
}