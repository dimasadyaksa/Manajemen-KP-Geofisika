<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tempatkerja_m extends CI_Model {

	public function Mahasiswa ()
	{
		$this->db->select('NamaPerusahaan, Bidang, Alamat');
		$this->db->from('tempatkerja');
		$query = $this->db->get();
		return $query->result();

		}
		
	

	public function insert($data)
	{
		$this->db->set($data);
		$this->db->insert('tempatkerja',$data);
	}
	
}
