<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_Dosen extends CI_Controller {
  

  function __construct(){
    parent::__construct();
    $this->load->model('m_data');
    $this->load->model('Mahasiswa_model');
    $this->load->model('Logbook_model');
    $this->load->model('Logbook_model');
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
		$sum['sum'] = $this->m_data->sumMhs();
    	$string = $this->load->view('pembimbing_d/index',$sum,true);
		echo $string;
	}
	public function dash()
	{
		$sum['sum'] = $this->m_data->sumMhs();
		//print_r($sum['0']);
		$string = $this->load->view('pembimbing_d/v_dashboard',$sum,true);
		echo $string;
	}
	public function daftar_logbook()
	{
		$data['daftar_logbook'] = $this->Logbook_model->daftar();
		$string = $this->load->view('pembimbing_d/v_daftar_logbook',$data,true);
		echo $string;
	}	
	public function daftar_mahasiswa()
	{
		$data['user'] = $this->m_data->tampil_data();
		$string = $this->load->view('pembimbing_d/v_daftar_m',$data,true);
		echo $string;
	}	
	public function logbook($nim)
	{
		if($this->session->userdata('status')=='Pembimbing Dosen'){
		$data['detail'] = $this->Logbook_model->getLogbook($nim);
		$string = $this->load->view('pembimbing_d/v_logbook',$data,true);
		echo $string;
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}	
	public function penilaian()
	{
		$nip = $this->m_data->getNip($this->session->userdata('email'));
		$data['user'] = $this->m_data->getNilaiPd($nip['0']->NIP)->result();
		$string = $this->load->view('pembimbing_d/v_penilaian',$data,true);
		echo $string;
		
	}	
	public function pengajuan()
	{
		$data['user'] = $this->m_data->tambahpengajuan();
		$string = $this->load->view('pembimbing_d/v_pengajuan',$data,true);
		echo $string;
	}
	function tambah_aksi(){
		$nama =$this->Mahasiswa_model->getNim($this->input->post('nama'));
		$nip = $this->m_data->getNip($this->session->userdata('email'));
		$materi = $this->input->post('materi');
		$penugasanmateri = $this->input->post('penugasanmateri');
		$bahasatatatulis = $this->input->post('bahasatatatulis');
		$catatan = $this->input->post('catatan');
		$rata = ($penugasanmateri+$bahasatatatulis+$materi)/3;

		$data = array(
			'nim' =>$nama['0']->NIM ,
			'NIP' => $nip['0']->NIP,
			'materi' => $materi,
			'penugasanmateri' => $penugasanmateri,
			'bahasatatatulis' => $bahasatatatulis,
			'catatan' => $catatan,
			'Rata_rata' => $rata
			);
		$this->m_data->input_data($data,'nilaidosen');
		$this->penilaian();
	}

	function hapus($id){
		$where = array('NIM' => $id);
		$this->m_data->hapus_data($where,'nilaidosen');
		redirect('pembimbing_dosen/penilaian');
	}

	function hapuspengajuan($id){
		$where = array('Nama' => $id);
		$this->m_data->hapus_data($where,'bimbingandosen');
		redirect('pembimbing_dosen/pengajuan');
	}

	public function aksiPengajuan()
	{
		$this->m_data->aksiPengajuan($this->input->post('nim'),$this->input->post('aksi'));
	}

	function tambahpengajuan($id){
		$where = array('NIM' => $id);
		$this->m_data->terima($where, 'mahasiswa');
		redirect('pembimbing_dosen/pengajuan');
	}
}