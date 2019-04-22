<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logbook_Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->view('logbook/index');
	}
	public function Retno_Monika()
	{


		$this->load->view('logbook/v_header');
		$this->load->view('logbook/v_sidebar');
		$this->load->view('logbook/Retno_Monika');

	}
}