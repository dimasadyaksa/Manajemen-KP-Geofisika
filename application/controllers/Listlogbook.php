<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class listlogbook extends CI_Controller {


	public function index()
	{
		$this->load->view('Pembimbing_Lapangan/PL_logbook/v_header.php');
		$this->load->view('Pembimbing_Lapangan/PL_logbook/v_sidebar.php');
		$this->load->view('Pembimbing_Lapangan/PL_logbook/v_body.php');
	}
	public function Logbook()
	{
		$this->load->view('Pembimbing_Lapangan/PL_logbook/v_header.php');
		$this->load->view('Pembimbing_Lapangan/PL_logbook/v_sidebar.php');
		$this->load->view('Pembimbing_Lapangan/PL_logbook/v_body.php');
	}
}
