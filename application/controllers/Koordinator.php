<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koordinator extends CI_Controller {

	public function index()
	{
		$this->load->view('koordinator/index');
	}
	public function tempatKP()
	{
		$this->load->view('koordinator/v_tempat_kp');
	}
	public function tambahUser()
	{
		$this->load->view('koordinator/v_tambah_user');
	}
}
