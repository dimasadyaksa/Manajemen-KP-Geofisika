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
		$hasil = $this->db->query("SELECT * FROM nilaidosen INNER JOIN mahasiswa ON mahasiswa.NIM = nilaidosen.NIM");
		return $hasil;
	}
	
	function tampil_TPraktik(){
        $this->load->model('User_m');
		$nim = $this->User_m->getId($this->session->userdata('email'));
				$this->session->set_userdata('nim', $nim->NIM);
		//print_r($nim);
		//echo $nim->NIM;
		$hasil = $this->db->query("SELECT * FROM tempatkerja INNER JOIN magang on magang.idPerusahaan =tempatkerja.idPerusahaan where magang.NIM=".$nim->NIM);
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
    function tampil_logbook(){
		$hasil = $this->db->query("SELECT * FROM logbook INNER JOIN mahasiswa ON mahasiswa.NIM = logbook.NIM");
		return $hasil;
	}
	function input_logbook($data,$table){
		$this->db->insert($table,$data);
	}
	function tambahpengajuan(){
		$this->db->select("mahasiswa.nim, mahasiswa.nama, mahasiswa.Angkatan, mahasiswa.Status");
		$this->db->from('Mahasiswa');
		$this->db->where('NIP = 20017731');
		$this->db->where('Status = 0');
		{
		$query = $this->db->get();
		return $query->result();
		}
	
	}
	function terima($where,$table){
		$this->db->where($where, $table);
		$this->db->set($table);
	}
	function updatepengajuan($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }
}