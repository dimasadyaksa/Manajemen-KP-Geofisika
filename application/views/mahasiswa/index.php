<?php
if(!@$_SESSION['p_dosen']) { ?>

	<?php $this->load->view('mahasiswa/v_header');?>
	<?php $this->load->view('mahasiswa/v_sidebar');?>
	<?php $this->load->view('mahasiswa/v_body');?>

<?php
} ?>