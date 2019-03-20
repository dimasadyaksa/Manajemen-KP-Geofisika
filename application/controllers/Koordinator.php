<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koordinator extends CI_Controller {

	public function index()
	{
		$this->load->view('koordinator/index');
	}
	public function tempatKP()
	{
		$string = $this->load->view('koordinator/v_tempat_kp','',true);
		echo $string;
	}
	
	public function tambahUser()
	{
		$string = $this->load->view('koordinator/v_tambah_user','', true);
		echo $string;
	}

	public function daftar()
	{
		if($this->input->post('daftar')=='1'){
			$data['title'] = 'Mahasiswa';
		}else if($this->input->post('daftar')=='2'){
			$data['title'] = 'Dosen Pembimbing';
		}else if($this->input->post('daftar')=='3'){
			$data['title'] = 'Dosen Pembimbing Lapangan';
		}
		$string = $this->load->view('koordinator/daftar',$data,true);
		echo $string;
	}
}
