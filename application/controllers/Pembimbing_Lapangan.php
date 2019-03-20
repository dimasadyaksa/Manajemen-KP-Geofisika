<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_Lapangan extends CI_Controller {

	public function index()
	{
		$this->load->view('Pembimbing_Lapangan/index');
	
	}
	public function daftar_mahasiswa() {
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_daftar_m');
	}
	public function logbook() {
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_logbook');
}
	public function Penilaian() {
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_penilaian');
}
}