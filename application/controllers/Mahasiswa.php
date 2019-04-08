<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		check_mahasiswa();
		$this->load->view('mahasiswa/index');
	}
	public function datadiri()
	{
		check_mahasiswa();
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_datadiri');
	}
	public function logbook()
	{
		check_mahasiswa();
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_logbook');
	}
	public function PLapangan()
	{
		check_lapangan();
		check_dosen();
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_pembimbing_lapangan');
	}
	public function TPraktik()
	{
		check_lapangan();
		check_dosen();
		$this->load->view('mahasiswa/v_header');
		$this->load->view('mahasiswa/v_sidebar');
		$this->load->view('mahasiswa/v_tempatPraktik');
	}
}
	