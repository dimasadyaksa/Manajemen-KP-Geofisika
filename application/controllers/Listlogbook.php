<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class listlogbook extends CI_Controller {


	public function index()
	{
		$this->load->view('PL_logbook/v_header.php');
		$this->load->view('PL_logbook/v_sidebar.php');
		$this->load->view('PL_logbook/v_body.php');
	}
}
