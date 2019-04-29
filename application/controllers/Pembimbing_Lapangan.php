<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_Lapangan extends CI_Controller {
  
  function __construct(){
    parent::__construct();
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
		if($this->session->userdata('status')=='Pembimbing Lapangan'){
      		$this->load->view('pembimbing_lapangan/index');
    	}else{
      		echo "Anda tidak berhak mengakses halaman ini";
      		$this->load->view('back');
   	 	}
	}
	public function daftar_mahasiswa() 
	{
		if($this->session->userdata('status')=='3'){
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_daftar_m');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}	
	public function listMhs()
    {
    	$data = $this->Mahasiswa_model->get_all();
    	$i = 0;
    	foreach ($data as $row)
		{
			$i++;
			"<tr>
							<td>".$i."</td>
							<td id='email'>".$row->email."</td>
							<td>".$row->password."</td>
							<td>".$row->status."</td>
							<td>
								<button type='button' class='btn btn-info' data-toggle='modal' data-target='#update_user_popup' onclick=dataTable('".$row->email."','".$row->password."','".$row->status."') >Edit</button>
								<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete_user_popup'>Delete</button>
					</td>
				</tr>"
			echo "<tr>
              <td class='text-left'>".$i."</td>
              <td class='text-left'>".$row->NIM."</td>
              <td class='text-left'>".$row->Nama."</td>
              <td class='text-left'>".$row->Angkatan."</td>
              <td class='text-left'>
                <button type='button' class='btn btn-info'
                 onclick=dataTable('".$row->Nama."','".$row->NIM."','".$row->Angkatan."','".$row->JudulProposal."','".$row->idperusahaan."','".$row->MulaiMagang."','".$row->SelesaiMagang."') data-toggle='modal' data-target='#myModal'>Detail</button>
              </td>
              </tr>";
	       
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
		if($this->session->userdata('status')=='3'){
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_logbook');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}	
	public function Penilaian() 
	{
		if($this->session->userdata('status')=='3'){
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_penilaian');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
			$this->load->view('back');
		}
	}
}