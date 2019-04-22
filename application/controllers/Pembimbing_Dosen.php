<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_Dosen extends CI_Controller {
  

  function __construct(){
    parent::__construct();
    $this->load->model('m_data');
	$this->load->helper('url');
	$this->load->model('Mahasiswa_model');
    $this->load->model('Logbook_model');
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
		if($this->session->userdata('status')=='Pembimbing Dosen'){
      		$this->load->view('pembimbing_d/index');
    	}else{
      		echo "Anda tidak berhak mengakses halaman ini";
      		$this->load->view('back');
    	}	
	}
	public function daftar_logbook()
	{
		if($this->session->userdata('status')=='Pembimbing Dosen'){

			$q = urldecode($this->input->get('q', TRUE));
        	$start = intval($this->input->get('start'));
        
        	if ($q <> '') {
        	    $config['base_url'] = base_url() . 'logbook/index.html?q=' . urlencode($q);
        	    $config['first_url'] = base_url() . 'logbook/index.html?q=' . urlencode($q);
        	} else {
        	    $config['base_url'] = base_url() . 'logbook/index.html';
        	    $config['first_url'] = base_url() . 'logbook/index.html';
        	}

        	$config['per_page'] = 10;
        	$config['page_query_string'] = TRUE;
        	$config['total_rows'] = $this->Logbook_model->total_rows($q);
        	$logbook = $this->Logbook_model->get_limit_data($config['per_page'], $start, $q);
        	$daftarlogbook = $this->Logbook_model->daftar();

        	$this->load->library('pagination');
        	$this->pagination->initialize($config);

        	$data = array(
        		'daftar_logbook' => $daftarlogbook,
        	    'logbook_data' => $logbook,
        	    'q' => $q,
        	    'pagination' => $this->pagination->create_links(),
        	    'total_rows' => $config['total_rows'],
        	    'start' => $start,
        );

		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_daftar_logbook', $data);
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}	
	public function daftar_mahasiswa()
	{
		if($this->session->userdata('status')=='Pembimbing Dosen'){
		$data['user'] = $this->m_data->tampil_data();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_daftar_m', $data);
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}	
	public function logbook($nim)
	{
		if($this->session->userdata('status')=='Pembimbing Dosen'){
			$q = urldecode($this->input->get('q', TRUE));
        	$start = intval($this->input->get('start'));

			$detail = $this->Logbook_model->caridaftar($nim);
			$data = array('detail' => $detail, 
				'q' => $q,
        	    'start' => $start,
		);
			$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
			$this->load->view('pembimbing_d/v_logbook', $data);
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}		
	public function penilaian()
	{
		if($this->session->userdata('status')=='Pembimbing Dosen'){
		$data['user'] = $this->m_data->tampil_data();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_penilaian',$data);
		}else{
			echo "Anda tidak berhak mengakses halaman ini.";
			$this->load->view('back');
		}
	}	
	public function pengajuan()
	{
		if($this->session->userdata('status')=='Pembimbing Dosen'){
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_pengajuan');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
	function tambah_aksi(){
		$nim = $this->input->post('nim');
		$materi = $this->input->post('materi');
		$penugasanmateri = $this->input->post('penugasanmateri');
		$bahasatatatulis = $this->input->post('bahasatatatulis');
		$catatan = $this->input->post('catatan');

		$data = array(
			'nim' => $nim,
			'materi' => $materi,
			'penugasanmateri' => $penugasanmateri,
			'bahasatatatulis' => $bahasatatatulis,
			'catatan' => $catatan
			);
		$this->m_data->input_data($data,'nilaidosen');
		redirect('pembimbing_dosen/penilaian');
	}
}
