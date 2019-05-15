<?php 
 
class M_data extends CI_Model{
	
	function tampil_data(){
		$nip = $this->getNip($this->session->userdata('email'));
		$this->db->select("*");
		$this->db->from('bimbingan_dosen');
		$this->db->join('mahasiswa','mahasiswa.NIM = bimbingan_dosen.nim');
		$this->db->join('magang','magang.NIM = mahasiswa.nim','left');
		$this->db->join('tempatkerja','magang.idPerusahaan = tempatkerja.idPerusahaan','left');
		$this->db->where('bimbingan_dosen.idDosen = '.$nip['0']->NIP);
		$query = $this->db->get();
		return $query->result();
	}

	public function tampilDataPerusahaan($nim)
	{
		$this->db->select('*');
		$this->db->from('magang');
		$this->db->join('tempatkerja','magang.idPerusahaan = tempatkerja.idPerusahaan');
		$this->db->where('magang.nim = '.$nim);
		$query = $this->db->get();
		return $query;
	}

	function tampil_nilai(){
		$hasil = $this->db->query("SELECT * FROM nilaidosen INNER JOIN mahasiswa ON mahasiswa.NIM = nilaidosen.NIM");
		return $hasil;
	}
	
	public function getNilaiPd($nip)
	{
		$this->db->select("*");
		$this->db->from("nilaidosen");
		$this->db->where("NIP = ".$nip);
		$this->db->join('mahasiswa', 'mahasiswa.nim = nilaidosen.nim');
		$query = $this->db->get();
		return $query;
	}

	function tampil_TPraktik(){
		$hasil = $this->db->query("SELECT * FROM tempatkerja");
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
		$nip = $this->getNip($this->session->userdata('email'));
		$this->db->select("bimbingan_Dosen.nim, bimbingan_Dosen.nama,mahasiswa.PengajuanPembimbing");
		$this->db->from('bimbingan_dosen');
		$this->db->join('mahasiswa', 'mahasiswa.NIM = bimbingan_dosen.NIM');
		$this->db->where('bimbingan_dosen.idDosen = '.$nip['0']->NIP);
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
	public function aksiPengajuan($nim,$aksi)
	{
		$this->db->set('PengajuanPembimbing',$aksi);
		$this->db->where('nim',$nim);
		$this->db->update('mahasiswa');
	}

	public function getNip($email)
	{
		$this->db->select("*");
		$this->db->from('pembimbingdosen');
		$this->db->where('email = "'.$email.'"');
		$query = $this->db->get();
		return $query->result();
	}

	public function sumMhs()
	{
		$nip = $this->getNip($this->session->userdata('email'));
		$this->db->select('COUNT(Nim)');
		$this->db->from('bimbingan_dosen');
		$this->db->where('idDosen = '.$nip['0']->NIP);
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function getPL()
	{
		$this->db->select('*');
		$this->db->from('pembimbinglapangan');
		$this->db->join('bimbingan_lapangan','pembimbinglapangan.idDosenL = bimbingan_lapangan.idDosenL');
		$this->db->join('user','user.idUser = bimbingan_lapangan.idDosenL');
		$this->db->where('bimbingan_lapangan.NIMMhs='.$this->session->userdata('nim'));
		$query = $this->db->get();
		return $query->result();
	}
	function updatepengajuan($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }
}