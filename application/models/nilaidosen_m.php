<?php 
 
class nilaidosen_m extends CI_Model{
	function tampil_nilai(){
		return $this->db->get('nilaidosen');
	}
 
	function input_nilai($nilai,$table){
		$this->db->insert($table,$nilai);
	}
}