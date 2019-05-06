<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
  public $data;
  function __construct(){
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->model('Files_model');
    $this->load->model('m_data');
	$this->load->helper('url');

    //validasi jika user belum login
    if($this->session->userdata('email') != TRUE){
            echo "<script>
				alert('Anda tidak memiliki akses.');
				window.location='".site_url('login')."';
				</script>";
        }
        $data = $this->Mahasiswa_model->get_by_email($this->session->userdata('email'));
        $this->data = $data;
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
            $string = $this->load->view('mahasiswa/v_datadiri', '',true);
            echo $string;
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
	public function logbook()
	{
		if($this->auth()){
    		$data['user'] = $this->m_data->tampil_logbook()->result();
            $string = $this->load->view('mahasiswa/v_logbook', $data,true);
            echo $string;
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
    public function uploadLaporan()
    {
        $nim = $this->data->NIM;
        $data = $this->Files_model->get_by_id($nim);
        $string = $this->load->view('mahasiswa/v_upload _laporan','',true);
        echo $string;
    }
	public function PLapangan()
	{
		if($this->auth()){
            $string = $this->load->view('mahasiswa/v_pembimbing_lapangan','',true);
            echo $string;
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
	public function TPraktik()
	{
		if($this->auth()){
            $string = $this->load->view('mahasiswa/v_tempatPraktik','',true);
            echo $string;
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
		$this->logbook();
	}	
	function hapus($id){
		$where = array('NIM' => $id);
		$this->m_data->hapus_data($where,'logbook');
		redirect('Mahasiswa/logbook');
	}
    function unduh()
    { 
        $string = $this->load->view('mahasiswa/v_unduh','',true);
        echo $string;
    }
    public function aksi_upload(){
        $config['upload_path']          = './assets/';
        $config['allowed_types']        = 'pdf|doc';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
 
        $this->load->library('upload', $config);
 
        if ( ! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
            echo "<script>
                alert('File sukses di unggah!');
                window.location='".site_url('mahasiswa')."';
                </script>";
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
	