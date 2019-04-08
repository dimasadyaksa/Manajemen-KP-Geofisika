<?php
class Page extends CI_Controller{
  
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('userid') != TRUE){
            redirect('login');
        }
  }
 
  function index(){
    $this->load->view('index.php');
  }
 
  function data_mahasiswa(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('level')=='1'){
      $this->load->view('mahasiswa/index');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }
 
  function data_pembimbing(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='2'){
      $this->load->view('pembimbing_d/index');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
 
  function data_lapangan(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='3'){
      $this->load->view('pembimbing_lapangan/index');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}