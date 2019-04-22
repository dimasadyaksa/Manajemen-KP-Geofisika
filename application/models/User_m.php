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
	function get_all()
    {
        $this->db->order_by($this->id);
        return $this->db->get($this->table)->result();
    }
    function total_rows($q = NULL) {
        $this->db->like('NIP', $q);
		$this->db->or_like('idUser', $q);
		$this->db->or_like('Nama', $q);
		$this->db->or_like('kontak', $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }
    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
   function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->getId($data['Email']);
    }
     // update data
    public function getId($email)
    {

    	$this->db->where($this->email, $email);
        return $this->db->get($this->table)->row();
    }

    function update($id, $data){
        $this->db->where($this->email, $id);
        $this->db->update($this->table, $data);
        return $this->getId($id);
    }
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
     public function lastID()
    {
    	$query = $this->db->query('SELECT LAST_INSERT_ID();');
    	print_r($query);
    	return $query->result();
    }

}
