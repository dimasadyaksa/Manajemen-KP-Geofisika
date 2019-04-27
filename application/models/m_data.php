<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		$this->db->select("mahasiswa.nim, mahasiswa.nama, mahasiswa.Angkatan");
		$this->db->from('Mahasiswa');
		if($this->db->where('NIP = 20017731')){
		$query = $this->db->get();
		return $query->result();
		}
		elseif ($this->db->where('NIP = 20017732')){
		$query = $this->db->get();
		return $query->result();
		}
	
		
		
	}
	function tampil_nilai(){
		$hasil = $this->db->query("SELECT * FROM nilaidosen INNER JOIN mahasiswa ON mahasiswa.NIM = nilaidosen.NIM");
		return $hasil;
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where, $table);
		$this->db->delete($table);
	}
	function tampil_logbook(){
		$hasil = $this->db->query("SELECT * FROM logbook INNER JOIN mahasiswa ON mahasiswa.NIM = logbook.NIM");
		return $hasil;
	}
	function input_logbook($data,$table){
		$this->db->insert($table,$data);
	}	

}