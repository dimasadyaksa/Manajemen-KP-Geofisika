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
		
	}
	
}
