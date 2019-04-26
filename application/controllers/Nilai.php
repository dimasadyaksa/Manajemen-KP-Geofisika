<?php 


class Nilai extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

		if($this->session->userdata('email') != TRUE){
            echo "<script>
				alert('Anda tidak memiliki akses.');
				window.location='".site_url('login')."';
				</script>";
        }

	}

	function index(){
		if($this->session->userdata('status')=='Pembimbing Lapangan'){
		$data['user'] = $this->m_data->tampil_nilai()->result();
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');

		$this->load->view('v_tampil',$data);
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
	      $this->load->view('back');
		}
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$NIM = $this->input->post('NIM');
		$Pemahaman = $this->input->post('Pemahaman');
		$KemampuanPenugasan = $this->input->post('KemampuanPenugasan');
		$Komunikasi = $this->input->post('Komunikasi');
		$MenulisLaporan = $this->input->post('MenulisLaporan');
		$Adaptasi = $this->input->post('Adaptasi');

		$data = array(
			'Pemahaman' => $Pemahaman,
			'KemampuanPenugasan' => $KemampuanPenugasan,
			'Komunikasi' => $Komunikasi,
			'MenulisLaporan' => $MenulisLaporan,
			'Adaptasi' => $Adaptasi

			);
		$this-> m_data ->input_data($data,'nilailapangan');
		redirect('Pembimbing_Lapangan/penilaian');
	}

}