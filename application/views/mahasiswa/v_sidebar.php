
<div class="container content">
    <div class="row"><div class="col-md-3">

  <div class="list-group">
    <a href="http://siakad.itera.ac.id/mahasiswa" class="list-group-item active"><i class="fa fa-home tab10" aria-hidden="true"></i>Dashboard</a>
    <a href="#" class="list-group-item "><i class="fa fa-user-circle tab10" aria-hidden="true"></i>Profil</a>
    <a href="javascript:uploadLaporan()" class="list-group-item "><i class="fa fa-plus-circle tab10" aria-hidden="true"></i>Upload Laporan KP</a>
  </div>

  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-header">Menu</a>
    <a href="<?php echo site_url('mahasiswa/DataDiri')?>" class="list-group-item ">
      <i class="fa fa-clock-o tab10" aria-hidden="true"></i> Data Diri </a>
    <a href="<?php echo site_url('mahasiswa/LogBook')?>" class="list-group-item ">
      <i class="fa fa-question-circle tab10" aria-hidden="true"></i> Log Book </a>
      <a href="<?php echo site_url('mahasiswa/TPraktik')?>" class="list-group-item "><i class="fa fa-calendar tab10" aria-hidden="true"></i>Tempat Kerja Praktik</a>
  </div>

  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-header">Sistem</a>  
    <a href="<?php echo site_url('mahasiswa/PLapangan')?>"" class="list-group-item "><i class="fa fa-user-circle tab10" aria-hidden="true"></i>Pembimbing Lapangan</a>
    
  </div>

  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-header">Seminar</a>  
    <a href="<?php echo site_url('mahasiswa/PLapangan')?>"" class="list-group-item "><i class="fa fa-user-circle tab10" aria-hidden="true"></i>Daftar Seminar</a>
  </div>

  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-header">Unduh</a>  
    <a href="javascript:getFormulir('<?php echo base_url();?>','seminar')" class="list-group-item "><i class="fa fa-user-circle tab10" aria-hidden="true"></i>Formulir Pendaftaran Seminar</a>
    <a href="javascript:getFormulir('<?php echo base_url();?>','KP')" class="list-group-item "><i class="fa fa-user-circle tab10" aria-hidden="true"></i>Formulir Permohonan KP</a>
    <a href="javascript:getFormulir('<?php echo base_url();?>','kartuKP')" class="list-group-item "><i class="fa fa-calendar tab10" aria-hidden="true"></i>Kartu Bimbingan KP</a>
    <a href="javascript:getFormulir('<?php echo base_url();?>','kartuSeminarKP')" class="list-group-item "><i class="fa fa-calendar tab10" aria-hidden="true"></i>Kartu Seminar KP</a>
  </div>

</div>
