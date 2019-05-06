<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		$this->db->select("mahasiswa.nim, mahasiswa.nama, mahasiswa.Angkatan");
		$this->db->from('mahasiswa');
		$this->db->where('idDosenL = 1');
		$query = $this->db->get();
		return $query->result();
	}
	function tampil_nilai(){
		return $this->db->get('nilailapangan');
	}
	
	function tampil_TPraktik(){
		$hasil = $this->db->query("SELECT * FROM tempatkerja INNER JOIN mahasiswa ON mahasiswa.NIM = tempatkerja.NIM");
		return $hasil;
	}
	function input_TPraktik($data,$table){
		$this->db->insert($table,$data);
	}	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where, $table);
		$this->db->delete($table);
	}
	function tampil_daftarseminar(){
		$hasil = $this->db->query("SELECT * FROM jadwalseminar INNER JOIN mahasiswa ON mahasiswa.NIM = jadwalseminar.NIM");
		return $hasil;
	}
	function input_daftarseminar($data,$table){
		$this->db->insert($table,$data);
	}	

	function update($idPerusahaan, $data)
    {
        $this->db->where($this->idPerusahaan, $idPerusahaan);
        $this->db->update($this->table, $data);
    }
}