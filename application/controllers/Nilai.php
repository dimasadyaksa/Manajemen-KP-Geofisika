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
		if($this->session->userdata('status')=='Pembimbing Dosen'){
		$data['user'] = $this->m_data->tampil_nilai()->result();
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
		$nim = $this->input->post('nim');
		$materi = $this->input->post('materi');
		$penugasanmateri = $this->input->post('penugasanmateri');
		$bahasatatatulis = $this->input->post('bahasatatatulis');

		$data = array(
			'nim' => $nim,
			'materi' => $materi,
			'penugasanmateri' => $penugasanmateri,
			'bahasatatatulis' => $bahasatatatulis
			);
		$this->m_data->input_data($data,'nilaidosen');
		redirect('pembimbing_dosen/penilaian');
	}

}