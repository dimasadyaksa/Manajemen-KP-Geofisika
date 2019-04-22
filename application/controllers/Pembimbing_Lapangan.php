<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_Lapangan extends CI_Controller {
  
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    
        $this->load->model('Mahasiswa_model');
    if($this->session->userdata('email') != TRUE){
            redirect('login');
        }
  	}

	public function index()
	{
		if($this->session->userdata('status')=='Pembimbing Lapangan'){
      		$this->load->view('pembimbing_lapangan/index');
    	}else{
      		echo "Anda tidak berhak mengakses halaman ini";
      		$this->load->view('back');
   	 	}
	}
	public function daftar_mahasiswa() 
	{
		if($this->session->userdata('status')=='Pembimbing Lapangan'){
			$string = $this->load->view('Pembimbing_Lapangan/v_daftar_m','', true);
			echo $string;
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			
		}
	}	
	public function listMhs()
    {
    	$data = $this->Mahasiswa_model->get_all();
    	$i = 0;
    	foreach ($data as $row)
		{
			$i++;
			echo '<tr>
              <td class="text-left">'.$i.'</td>

              <td class="text-left">'.$row->NIM.'</td>
              <td class="text-left">'.$row->Nama.'</td>
              <td class="text-left">'.$row->Angkatan.'</td>
              <td class="text-left">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Detail</button>
              </td>
              </tr>';
	       
		}
    }
	public function daftar_logbook() 
	{
		if($this->session->userdata('status')=='Pembimbing Lapangan'){
			$string = $this->load->view('Pembimbing_Lapangan/v_logbook','', true);
			echo $string;
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}
	public function logbook() 
	{
		if($this->session->userdata('status')=='Pembimbing Lapangan'){
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_logbookMhs');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}	
	public function Penilaian() 
	{
		if($this->session->userdata('status')=='Pembimbing Lapangan'){
			$string = $this->load->view('Pembimbing_Lapangan/v_penilaian','', true);
			echo $string;
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}
}