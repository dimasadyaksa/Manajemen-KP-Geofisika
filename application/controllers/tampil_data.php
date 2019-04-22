<?php 
 
 
class tampil_data extends CI_Controller{

	function index(){
		$data['user'] = $this->nilaidosen_m->tampil_data()->result();
		$this->load->view('pembimbing_d/v_penilaian',$data);
		
	}

