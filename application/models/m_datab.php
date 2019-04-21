<?php 

class M_datab extends CI_Model{
	function tampil_data(){
		return $this->db->get('nilaidosen');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}