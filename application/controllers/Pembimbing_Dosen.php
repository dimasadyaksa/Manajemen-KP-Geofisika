<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_Dosen extends CI_Controller {

	public function index()
	{
		$this->load->view('pembimbing_d/index');
	}
	public function daftar_logbook()
	{
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_daftar_logbook');
	}
	public function daftar_mahasiswa(){
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_daftar_m');
	}
	public function logbook()
	{
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_logbook');
	}
}