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
        if (empty($data)) {
            $data['judul']='';
        }
        $string = $this->load->view('mahasiswa/v_upload _laporan',$data,true);
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
            $data['user'] = $this->m_data->tampil_TPraktik()->result();
            $string = $this->load->view('mahasiswa/v_tempatPraktik', $data,true);
            echo $string;
        }else{
            echo "Anda tidak berhak mengakses halaman ini";
            $this->load->view('back');
        }
    }
public function daftarseminar()
    {
        if($this->auth()){
              $data['user'] = $this->m_data->tampil_daftarseminar()->result();
            $string = $this->load->view('mahasiswa/v_daftarseminar', $data,true);
            echo $string;
        }else{
            echo "Anda tidak berhak mengakses halaman ini";
            $this->load->view('back');
        }
    }

function tambah_TPraktik(){  
        $nim = $this->input->post('nim');
        $namaperusahaan = $this->input->post('namaperusahaan');
        $bidang = $this->input->post('bidang');
        $alamat = $this->input->post('alamat');
        $kontak = $this->input->post('kontak');
       
        
        $data = array(
            'nim' => $nim,
            'namaperusahaan' => $namaperusahaan,
            'bidang' => $bidang,
            'alamat' => $alamat,
            'kontak' => $kontak,
            
            );
        $this->m_data->input_TPraktik($data,'tempatkerja');
        redirect('Mahasiswa/TPraktik');
        $this->TPraktik();
    }   


    function tambah_daftarseminar(){  
        $nim = $this->input->post('nim');
        $ruang = $this->input->post('ruang');
        $gedung = $this->input->post('gedung');
        $waktu = $this->input->post('waktu');
        
        
        $data = array(
            'nim' => $nim,
            'ruang' => $ruang,
            'gedung' => $gedung,
            'waktu' => $waktu,
             
            );
        $this->m_data->input_daftarseminar($data,'jadwalseminar');
        redirect('Mahasiswa/daftarseminar');
    } 
    function hapusseminar($id){
        $where = array('NIM' => $id);
        $this->m_data->hapus_data($where,'jadwalseminar');
        redirect('Mahasiswa/daftarseminar');
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
        $judul = $this->input->post('judul');
        $config['upload_path']          = './assets/files/LaporanKP';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 1024;
        $config['file_name']            = $this->data->email;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
         
        if ( ! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
            $toDB['NIM'] = $this->data->NIM;
            $toDB['url'] = base_url('assets/files/LaporanKP/'.$this->upload->data('file_name'));
            $toDB['judul'] = $judul;
            $this->Files_model->delete($toDB['NIM']);
            $this->Files_model->insert($toDB);
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
	