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
    public function auth()
    {
        return $this->session->userdata('status')=='Mahasiswa';
    }
	public function datadiri()
	{
		if($this->auth()){
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
		if($this->auth()){
		$data['user'] = $this->m_data->tampil_logbook()->result();
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_logbook', $data);
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
    public function uploadLaporan()
    {
        $string = $this->load->view('mahasiswa/v_upload _laporan','',true);
        echo $string;
    }
	public function PLapangan()
	{
		if($this->auth()){
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
		if($this->auth()){
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
    public function aksi_upload(){
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
 
        $this->load->library('upload', $config);
 
        if ( ! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }else{
            $data = array('upload_data' => $this->upload->data());
             print_r($data);
        }
    }
/*
    public function getDoc($value)
    {
        if($value=="KP"{
            redirect("assets/documents/Formulir%20Permohonan%20Kerja%20Praktik.pdf");
        }elseif ($value=="seminar") {
            redirect("assets/documents/Formulir%20Pendaftaran%20Seminar%20Kerja%20Praktik.pdf");
        }elseif ($value=="kartuKP") {
            redirect("assets/documents/Kartu%20Bimbingan%20Kerja%20Praktik.pdf");
        }elseif ($value=="kartuSeminarKP") {
            redirect("assets/documents/Kartu%20Peserta%20Seminar%20Kerja%20Praktik.pdf");
        }
    }*/
}
	