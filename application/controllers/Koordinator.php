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

	public function daftarMhs()
	{
		$data['judul'] = "Daftar Mahasiswa";
		$data['a'] = "Nama";
		$data['b'] = "NIM";
		$data['c'] = "Angkatan";
		$data['role'] = "Mahasiswa";
		$string = $this->load->view('koordinator/v_daftar',$data, true);
		echo $string;
	}
	public function daftarDp()
	{	
		$data['judul'] = "Daftar Dosen Pembimbing";
		$data['a'] = "Nama";
		$data['b'] = "NIP";
		$data['c'] = "Jumlah Mahasiswa";
		$data['role'] = "Dosen Pembimbing";
		$string = $this->load->view('koordinator/v_daftar',$data, true);
		echo $string;
	}
	public function daftarDpl()
	{
		$data['judul'] = "Daftar Dosen Pembimbing Lapangan";
		$data['a'] = "Nama";
		$data['b'] = "NIP";
		$data['c'] = "Perusahaan";
		$data['role'] = "DosenPembimbingLapangan";
		$string = $this->load->view('koordinator/v_daftardosenlap',$data, true);
		echo $string;
	}
}
