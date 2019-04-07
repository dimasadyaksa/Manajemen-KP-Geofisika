<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembimbinglapangan_model extends CI_Model
{

    public $table = 'pembimbinglapangan';
    public $id = 'idDosenL';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
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
        $this->db->like('idDosenL', $q);
	$this->db->or_like('idPerusahaan', $q);
	$this->db->or_like('Nama', $q);
	$this->db->or_like('Kontak', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('Posisi', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('idDosenL', $q);
	$this->db->or_like('idPerusahaan', $q);
	$this->db->or_like('Nama', $q);
	$this->db->or_like('Kontak', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('Posisi', $q);
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

/* End of file Pembimbinglapangan_model.php */
/* Location: ./application/models/Pembimbinglapangan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-07 16:48:03 */
/* http://harviacode.com */