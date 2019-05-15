<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
  public $data;
  function __construct(){
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->model('Files_model');
    $this->load->model('m_data');
    $this->load->model('Logbook_model');
    $this->load->model('tempatkerja_m');
    $this->load->model('pembimbinglapangan_model');
    $this->load->model('user_m');
	$this->load->helper('url');

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
          $tmp = $this->Mahasiswa_model->getNimEmail();
	       $nim = $tmp['0']->NIM;
           $this->session->set_userdata('nim',$nim);
          $this->load->view('mahasiswa/index');
	    }else{
	      echo "Anda tidak berhak mengakses halaman ini";
	      $this->load->view('back');
	    }

	}

public function update_datadiri() 
    {
        $id = $this->session->userdata('nim');
        if($this->session->userdata('status')=='Mahasiswa'){
            $data = array(
            'nim' => $id,
            'Nama' => $this->input->post('nama',TRUE),
            'No_telp' => $this->input->post('hp',TRUE),
            'IPK' => $this->input->post('ip',TRUE),
            'SKS' => $this->input->post('sks',TRUE),
            'Angkatan' => $this->input->post('angkatan',TRUE),
            );
            $this->Mahasiswa_model->update($id, $data);
            /*$tempatKP = array(
                'NamaPerusahaan'=>$this->input->post('perusahaan'),
                'Alamat'=>$this->input->post('alamat'),
                'bidang'=>$this->input->post('bidang'),
                'kontak'=>$this->input->post('kontak')
            );
            $this->tempatkerja_m->insert($tempatKP);*/
            $string = $this->load->view('mahasiswa/v_dashboard', '',true);
            echo $string;
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
            $data['user'] = $this->Mahasiswa_model->get_by_id($this->session->userdata('nim'));

            $string = $this->load->view('mahasiswa/v_datadiri', $data,true);
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
            $data['data'] = $this->m_data->getPL();
            $string = $this->load->view('mahasiswa/v_pembimbing_lapangan',$data,true);
            echo $string;
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}

    public function tambahPL()
    {
        $nama = $this->input->post('nama');
        $kontak = $this->input->post('kontak');
        $pass = $this->input->post('pass');
        $email = $this->input->post('email');
        $posisi = $this->input->post('jabatan');
       
        $dataUser  = array(
            'password'=>$pass,
            'Email'=>$email,
            'status'=>'Pembimbing Lapangan'
         );
        $id = $this->user_m->insert($dataUser);
        $dataLap  = array(
            'idDosenL'=>$id->idUser,
            'Nama'=>$nama,
            'Kontak'=>$kontak,
            'Email'=>$email,
            'Posisi'=>$posisi
         );
        $this->pembimbinglapangan_model->insert($dataLap);
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

    public function tambahPerusahaan()
    {
        $namaperusahaan = $this->input->post('namaperusahaan');
        $bidang = $this->input->post('bidang');
        $alamat = $this->input->post('alamat');
        $kontak = $this->input->post('kontak');

        $data = array(
            'NamaPerusahaan'=>$namaperusahaan,
            'Bidang'=>$bidang,
            'alamat'=>$alamat,
            'kontak'=>$kontak
        );
        $this->tempatkerja_m->insert($data);
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

public function saveSeminar()
{   $nim = $this->input->post('NIM');
    $ruang = $this->input->post('Ruang');   
    $gedung = $this->input->post('Gedung');
    $waktu = $this->input->post('waktu');

    $data =array (
        'NIM'=>$nim,
        'Ruang'=>$ruang,
        'Gedung'=>$gedung,
        'waktu'=>$waktu
    );

    $this->Mahasiswa_model->seminar($data);
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

	function hapusLogbook(){
        $tanggal = $this->input->post('tanggal');
        $this->Logbook_model->delete($this->session->userdata('nim'),$tanggal);
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
    public function Profil()
    {
        if($this->session->userdata('status')=='Mahasiswa'){
            $data['dataDiri'] = $this->Mahasiswa_model->getDataDiri();
            $string = $this->load->view('mahasiswa/v_profil',$data,true);
            echo $string;
        }else{
            echo "Anda tidak berhak mengakses halaman ini";
            $this->load->view('back');
        }
    }

    public function PembimbingDosen()
    {
        if($this->session->userdata('status')=='Mahasiswa'){
            $data['dataDosen'] = $this->Mahasiswa_model->tampilDosen();
            $string = $this->load->view('mahasiswa/v_pembimbingdosen', $data,true);
            echo $string;
        }else{
            echo "Anda tidak berhak mengakses halaman ini";
            $this->load->view('back');
        }    
    }
public function submitLogbook()
{
    $nim = $this->session->userdata('nim');
    $tanggal = $this->input->post('tanggal');
    $jammulai = $this->input->post('jammulai');
    $jamselesai = $this->input->post('jamselesai');
    $kegiatan = $this->input->post('kegiatan');

    $data = array(
        'nim' => $nim,
        'Tanggal'=>$tanggal,
        'jammulai'=>$jammulai,
        'jamselesai'=>$jamselesai,
        'kegiatan'=>$kegiatan 
    );

    $this->Logbook_model->insert($data);
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
	