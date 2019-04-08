<?php

function check_already_login() {
	$ci =& get_instance();
	$user_session = $ci->session->userdata('userid');
	if($user_session) {
		redirect('dashboard/logged');
	}
}


function check_mahasiswa(){
	$ci =& get_instance();
	$ci->load->library('fungsi');
	if($ci->fungsi->user_login()->level != 1) {
		redirect('mahasiswa/index');
	}
}
function check_dosen(){
	$ci =& get_instance();
	$ci->load->library('fungsi');
	if($ci->fungsi->user_login()->level != 2) {
		redirect('pembimbing_dosen/index');
	}
}
function check_lapangan(){
	$ci =& get_instance();
	$ci->load->library('fungsi');
	if($ci->fungsi->user_login()->level != 3) {
		redirect('pembimbing_lapangan/index');
	}
}
?>