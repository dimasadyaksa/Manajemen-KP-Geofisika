<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_Dosen extends CI_Controller {
  

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
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_daftar_logbook');
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
	public function logbook()
	{
		if($this->session->userdata('status')=='Pembimbing Dosen'){
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
		if($this->session->userdata('status')=='Pembimbing Dosen'){
		$data['user'] = $this->m_data->tampil_nilai()->result();
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
			$data['user'] = $this->m_data->tambahpengajuan();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_pengajuan', $data);
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
	function update(){
		$data['Status'] = '1';
		$nim = $this->m_data->tambahpengajuan();
		$this->m_data->update($nim, $data);
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
	function hapus($id){
		$where = array('NIM' => $id);
		$this->m_data->hapus_data($where,'nilaidosen');
		redirect('pembimbing_dosen/penilaian');
	}
	function hapuspengajuan($id){
		$where = array('NIM' => $id);
		$this->m_data->hapus_data($where,'bimbingandosen');
		redirect('pembimbing_dosen/pengajuan');
	}
	function tambahpengajuan($id){
     $data = array(
          'column11' => $this->post->input('terima'),
          
     );
    $this->m_data->tambahpengajuan($id, $data);
	}
}