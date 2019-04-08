<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_Dosen extends CI_Controller {
	
	public function index()
	{
		check_lapangan();
		check_mahasiswa();
		$this->load->view('pembimbing_d/index');
	}
	public function daftar_logbook()
	{
		check_lapangan();
		check_mahasiswa();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_daftar_logbook');
	}
	public function daftar_mahasiswa()
	{
		check_lapangan();
		check_mahasiswa();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_daftar_m');
	}
	public function logbook()
	{
		check_lapangan();
		check_mahasiswa();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_logbook');
	}
	public function penilaian()
	{
		check_lapangan();
		check_mahasiswa();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_penilaian');
	}
	public function pengajuan()
	{
		check_lapangan();
		check_mahasiswa();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_pengajuan');
	}
}