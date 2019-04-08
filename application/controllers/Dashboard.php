<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		
		$this->load->view('index');
	}
	public function logged()
	{
		
		$this->load->view('v_logged');
		$this->load->view('v_sidebar');
		$this->load->view('v_body');
	}
}
