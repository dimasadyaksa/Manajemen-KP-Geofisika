<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function login($user,$pass)
	{
		$this->db->select('email,password,status');
		$this->db->from('user');
		$this->db->where('email', $user);
		$this->db->where('password', $pass);
		$this->db->limit(1);

		$query = $this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function get($id = null)
	{
		$this->db->from('user');
		if($id != null) {
			$this->db->where('idUser', $id);
		}
		$query = $this->db->get();
		return $query;
	}
}
