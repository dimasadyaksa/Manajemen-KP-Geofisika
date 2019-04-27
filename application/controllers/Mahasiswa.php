<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
  
  function __construct(){
    parent::__construct();
    $this->load->model('m_data');
	$this->load->helper('url');
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
	public function logbook()
	{
		if($this->session->userdata('status')=='Mahasiswa'){
		$data['user'] = $this->m_data->tampil_logbook()->result();
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_logbook', $data);
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
	function tambah_logbook(){	
		$nim = $this->input->post('nim');
		$tanggal = $this->input->post('tanggal');
		$jammulai = $this->input->post('jammulai');
		$jamselesai = $this->input->post('jamselesai');
		$kegiatan = $this->input->post('kegiatan');
		
		$data = array(
			'nim' => $nim,
			'tanggal' => $tanggal,
			'jammulai' => $jammulai,
			'jamselesai' => $jamselesai,
			'kegiatan' => $kegiatan,
			
			);
		$this->m_data->input_logbook($data,'logbook');
		redirect('Mahasiswa/logbook');
	}	
	function hapus($id){
		$where = array('NIM' => $id);
		$this->m_data->hapus_data($where,'logbook');
		redirect('Mahasiswa/logbook');
	}
}
	