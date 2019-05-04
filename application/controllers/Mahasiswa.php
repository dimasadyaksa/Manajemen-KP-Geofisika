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
		$id = $this->session->userdata('idUser');
		if($this->session->userdata('status')=='Mahasiswa'){
				$data = array(
            	'idUser' => $id,
				'Nama' => $this->input->post('Nama',TRUE),
				'NIM' => $this->input->post('NIM',TRUE),
				'No_telp' => $this->input->post('No_telp',TRUE),
				'IPK' => $this->input->post('IPK',TRUE),
				'SKS' => $this->input->post('SKS',TRUE),
				'Angkatan' => $this->input->post('Angkatan',TRUE),
				);
				$this->Mahasiswa_model->insert($data);
            	$this->session->set_flashdata('message', 'Data Berhasil Di Input');
				redirect(site_url('mahasiswa/create')); 	
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}

	 public function update_datadiri() 
    {
        $id = $this->session->userdata('idUser');
		if($this->session->userdata('status')=='Mahasiswa'){
            $data = array(
			'idUser' => $id,
			'Nama' => $this->input->post('Nama',TRUE),
			'No_telp' => $this->input->post('No_telp',TRUE),
			'IPK' => $this->input->post('IPK',TRUE),
			'SKS' => $this->input->post('SKS',TRUE),
			'Angkatan' => $this->input->post('Angkatan',TRUE),
			'JudulProposal' => $this->input->post('JudulProposal',TRUE),
	   		);

            $this->Mahasiswa_model->update($this->input->post('NIM', TRUE), $data);
            redirect(site_url('mahasiswa/index'));
        }else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
    }
    

	 public function create() 
    {
    	$idUser = $this->session->userdata('idUser');
    	$row = $this->Mahasiswa_model->get_id_user($idUser);
    	if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('mahasiswa/update_datadiri'),
		'idUser' => set_value('idUser', $row->idUser),
		'Nama' => set_value('Nama', $row->Nama),
		'NIM' => set_value('NIM', $row->NIM),
		'No_telp' => set_value('No_telp', $row->No_telp),
		'IPK' => set_value('IPK', $row->IPK),
		'SKS' => set_value('SKS', $row->SKS),
		'Angkatan' => set_value('Angkatan', $row->Angkatan),
		'JudulProposal' => set_value('JudulProposal', $row->JudulProposal),
	    );
            $this->load->view('mahasiswa/v_header');
			$this->load->view('mahasiswa/v_sidebar');
			$this->load->view('mahasiswa/v_datadiri', $data);
        }else{
        	$data = array(
            'button' => 'Create',
            'action' => site_url('mahasiswa/datadiri'),
	    'idUser' => set_value('idUser'),
	    'Nama' => set_value('Nama'),
	    'NIM' => set_value('NIM'),
	    'No_telp' => set_value('No_telp'),
	    'IPK' => set_value('IPK'),
	    'SKS' => set_value('SKS'),
	    'Angkatan' => set_value('Angkatan'),
	);
        $this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_datadiri', $data);
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
            $this->load->view('mahasiswa/v_header');
            $this->load->view('mahasiswa/v_sidebar');
            $this->load->view('mahasiswa/v_body');
            echo "<script type='text/javascript'>
                $.post('mahasiswa/uploadLaporan','',function(data){
                $('#isi').html(data);
                $('#textKonten').html('Upload Laporan');
                active('unggah');
             }); 
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
	
