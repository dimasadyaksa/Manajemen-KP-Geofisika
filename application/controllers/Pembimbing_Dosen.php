<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_Dosen extends CI_Controller {
	
	public function index()
	{
		check_lapangan();
		check_mahasiswa();
		$this->load->view('pembimbing_d/index');
	}
	public function daftar_logbook()
	{
		check_lapangan();
		check_mahasiswa();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_daftar_logbook');
	}
	public function daftar_mahasiswa()
	{
		check_lapangan();
		check_mahasiswa();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_daftar_m');
	}
	public function logbook()
	{
		check_lapangan();
		check_mahasiswa();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_logbook');
	}
	public function penilaian()
	{
		check_lapangan();
		check_mahasiswa();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_penilaian');
	}
	public function pengajuan()
	{
		check_lapangan();
		check_mahasiswa();
		$this->load->view('pembimbing_d/v_header');
		$this->load->view('pembimbing_d/v_sidebar');
		$this->load->view('pembimbing_d/v_pengajuan');
	}
	public function read($id) 
    {
        $row = $this->Pembimbingdosen_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idUser' => $row->idUser,
		'Nama' => $row->Nama,
		'NIP' => $row->NIP,
		'Spesialis' => $row->Spesialis,
		'kontak' => $row->kontak,
	    );
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }

    public function create() 
    {
        $data = array(
	    'idUser' => set_value('idUser'),
	    'Nama' => set_value('Nama'),
	    'NIP' => set_value('NIP'),
	    'Spesialis' => set_value('Spesialis'),
	    'kontak' => set_value('kontak'),
		);
		$this->Pembimbingdosen_model->insert($data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idUser' => $this->input->post('idUser',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'Spesialis' => $this->input->post('Spesialis',TRUE),
		'kontak' => $this->input->post('kontak',TRUE),
	    );

            $this->Pembimbingdosen_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pembimbingdosen_model->get_by_id($id);

        if ($row) {
            $data = array(
		'idUser' => set_value('idUser', $row->idUser),
		'Nama' => set_value('Nama', $row->Nama),
		'NIP' => set_value('NIP', $row->NIP),
		'Spesialis' => set_value('Spesialis', $row->Spesialis),
		'kontak' => set_value('kontak', $row->kontak),
	    );
            $this->load->view('pembimbingdosen/pembimbingdosen_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('NIP', TRUE));
        } else {
            $data = array(
		'idUser' => $this->input->post('idUser',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'Spesialis' => $this->input->post('Spesialis',TRUE),
		'kontak' => $this->input->post('kontak',TRUE),
	    );

            $this->Pembimbingdosen_model->update($this->input->post('NIP', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pembimbingdosen_model->get_by_id($id);

        if ($row) {
            $this->Pembimbingdosen_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idUser', 'iduser', 'trim|required');
	$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('Spesialis', 'spesialis', 'trim|required');
	$this->form_validation->set_rules('kontak', 'kontak', 'trim|required');

	$this->form_validation->set_rules('NIP', 'NIP', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}