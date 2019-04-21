<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		$this->db->select("mahasiswa.nim, mahasiswa.nama, mahasiswa.Angkatan");
		$this->db->from('Mahasiswa');
		$this->db->where('NIP = 20017731');
		$query = $this->db->get();
		return $query->result();
	}
	function tampil_nilai(){
		return $this->db->get('nilaidosen');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}