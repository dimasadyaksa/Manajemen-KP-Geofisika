<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
  
  function __construct(){
    parent::__construct();
    $this->load->model('m_data');
    $this->load->helper('url');
    //validasi jika user belum login
    if($this->session->userdata('email') != TRUE){
            echo "<script>
                alert('Anda tidak memiliki akses.');
                window.location='".site_url('login')."';
                </script>";
        }
  }

    public function index()
    {
        if($this->session->userdata('status')=='Mahasiswa'){
          $this->load->view('mahasiswa/index');
        }else{
          echo "Anda tidak berhak mengakses halaman ini";
          $this->load->view('back');
        }

    }
    public function auth()
    {
        return $this->session->userdata('status')=='Mahasiswa';
    }
    public function datadiri()
    {
        if($this->auth()){
        $this->load->view('mahasiswa/v_header');
        $this->load->view('mahasiswa/v_sidebar');
        $this->load->view('mahasiswa/v_datadiri');
        }else{
            echo "Anda tidak berhak mengakses halaman ini";
            $this->load->view('back');
        }
    }
    public function logbook()
    {
        if($this->auth()){
        $data['user'] = $this->m_data->tampil_logbook()->result();
        $this->load->view('mahasiswa/v_header');
        $this->load->view('mahasiswa/v_sidebar');
        $this->load->view('mahasiswa/v_logbook', $data);
        }else{
            echo "Anda tidak berhak mengakses halaman ini";
            $this->load->view('back');
        }
    }
    public function PLapangan()
    {
        if($this->auth()){
        $this->load->view('mahasiswa/v_header');
        $this->load->view('mahasiswa/v_sidebar');
        $this->load->view('mahasiswa/v_pembimbing_lapangan');
        }else{
            echo "Anda tidak berhak mengakses halaman ini";
            $this->load->view('back');
        }
    }
    public function TPraktik()
    {
        if($this->auth()){
        $data['user'] = $this->m_data->tampil_TPraktik()->result();
        $this->load->view('mahasiswa/v_header');
        $this->load->view('mahasiswa/v_sidebar');
        $this->load->view('mahasiswa/v_tempatPraktik', $data);
        }else{
            echo "Anda tidak berhak mengakses halaman ini";
            $this->load->view('back');
        }
    }
public function daftarseminar()
    {
        if($this->auth()){
        $data['user'] = $this->m_data->tampil_daftarseminar()->result();
        $this->load->view('mahasiswa/v_header');
        $this->load->view('mahasiswa/v_sidebar');
        $this->load->view('mahasiswa/v_daftarseminar', $data);
        }else{
            echo "Anda tidak berhak mengakses halaman ini";
            $this->load->view('back');
        }
    }

function tambah_TPraktik(){  
        $nim = $this->input->post('nim');
        $namaperusahaan = $this->input->post('namaperusahaan');
        $bidang = $this->input->post('bidang');
        $alamat = $this->input->post('alamat');
        $kontak = $this->input->post('kontak');
       
        
        $data = array(
            'nim' => $nim,
            'namaperusahaan' => $namaperusahaan,
            'bidang' => $bidang,
            'alamat' => $alamat,
            'kontak' => $kontak,
            
            );
        $this->m_data->input_TPraktik($data,'tempatkerja');
        redirect('Mahasiswa/TPraktik');
    }   


    function tambah_daftarseminar(){  
        $nim = $this->input->post('nim');
        $ruang = $this->input->post('ruang');
        $gedung = $this->input->post('gedung');
        $waktu = $this->input->post('waktu');
        
        
        $data = array(
            'nim' => $nim,
            'ruang' => $ruang,
            'gedung' => $gedung,
            'waktu' => $waktu,
             
            );
        $this->m_data->input_daftarseminar($data,'jadwalseminar');
        redirect('Mahasiswa/daftarseminar');
    } 
    function hapus($id){
        $where = array('NIM' => $id);
        $this->m_data->hapus_data($where,'jadwalseminar');
        redirect('Mahasiswa/daftarseminar');
    }

    function update($id){
        $where = array('NIM' => $id);
        $this->m_data->update_data($where,'jadwalseminar');
        redirect('Mahasiswa/daftarseminar');
    }
    
}
    