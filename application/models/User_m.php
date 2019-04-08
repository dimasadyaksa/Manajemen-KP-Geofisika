<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {
	public $table = 'user';
    public $id = 'idUser';
    public $order = 'DESC';

	public function login($user,$pass)
	{
		$this->db->select('username,password,level');
		$this->db->from('user');
		$this->db->where('username', $user);
		$this->db->where('password', md5($pass));
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
			$this->db->where('user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('idUser', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('status', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('idUser', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('status', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
