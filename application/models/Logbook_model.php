<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logbook_model extends CI_Model
{


    function __construct()
    {
        parent::__construct();
    }

    function getDataLogbook(){
        $this->db->select("mahasiswa.NIM,mahasiswa.Nama, magang.Divisi"); 
        $this->db->from('magang');
        $this->db->join('mahasiswa','mahasiswa.NIM=magang.NIM');
        $query = $this->db->get();
        return $query->result();
    }

    function getDetailLogbook($NIM){
       $this->db->select("mahasiswa.Nama,logbook.NIM, logbook.Tanggal, logbook.JamMulai, logbook.JamSelesai, logbook.Kegiatan"); 
       $this->db->from('logbook');
       $this->db->join('mahasiswa','mahasiswa.NIM=logbook.NIM');
       $this->db->where('mahasiswa.nim', $NIM);
       $query = $this->db->get();
       return $query->result();
   }
	
	//join tablemahasiswa dan logbook
    function daftar()
    {
        $this->db->select('*');
        $this->db->from('logbook');
        $this->db->join('mahasiswa','logbook.NIM=mahasiswa.NIM');
        $query = $this->db->get();
        return $query->result();
    }

    function caridaftar($nim)
    {
        $this->db->select('*');
        $this->db->join('mahasiswa','logbook.NIM=mahasiswa.NIM');
        $this->db->from('logbook');
        $this->db->where('logbook.NIM', $nim);
        $query = $this->db->get();
        return $query->result();
    }


}
