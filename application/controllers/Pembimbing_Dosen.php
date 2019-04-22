<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_Dosen extends CI_Controller {
  
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('email') != TRUE){
            redirect('login');
        }
  }
	public function index()
	{
		if($this->session->userdata('status')=='2'){
      		$this->load->view('pembimbing_d/index');
    	}else{
      		echo "Anda tidak berhak mengakses halaman ini";
      		$this->load->view('back');
    	}	
	}
	public function daftar_logbook()
	{
		if($this->session->userdata('levv_headerel')=='2'){
		$this->load->view('pembimbing_d/');
		$this->load->view('pembimbing_d/v_daftar_logbook');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}	
	public function daftar_mahasiswa()
	{
		if($this->session->userdata('status')=='2'){
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_daftar_m');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}	
	public function logbook()
	{
		if($this->session->userdata('status')=='2'){
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_logbook');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}	
	public function penilaian()
	{
		if($this->session->userdata('status')=='2'){
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_penilaian');
		}else{
			echo "Anda tidak berhak mengakses halaman ini.";
			$this->load->view('back');
		}
	}	
	public function pengajuan()
	{
		if($this->session->userdata('status')=='2'){
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_pengajuan');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
	$mahasiswa = query("SELECT * FROM mahasiswa");
	$conn = mysqli_connect("localhost", "root", "", "sistemmkp");
	function query($query) {
	global $conn;
	// var_dump($query);die;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
	}	
}