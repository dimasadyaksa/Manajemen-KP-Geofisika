<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembimbing_Lapangan extends CI_Controller {

	public function index()
	{
		$this->load->view('Pembimbing_Lapangan/index');
	
	}
	public function daftar_mahasiswa() 
	{
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_daftar_m');
	}
	public function logbook() 
	{
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_logbook');
}
	public function Penilaian() 
	{
		$this->load->view('Pembimbing_Lapangan/v_header');
		$this->load->view('Pembimbing_Lapangan/v_sidebar');
		$this->load->view('Pembimbing_Lapangan/v_penilaian');
	}

    public function read($id) 
    {
        $row = $this->Pembimbinglapangan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idDosenL' => $row->idDosenL,
		'idPerusahaan' => $row->idPerusahaan,
		'Nama' => $row->Nama,
		'Kontak' => $row->Kontak,
		'email' => $row->email,
		'Posisi' => $row->Posisi,
	    );
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }

    public function create() 
    {
        $data = array(
		    'idDosenL' => set_value('idDosenL'),
		    'idPerusahaan' => set_value('idPerusahaan'),
		    'Nama' => set_value('Nama'),
		    'Kontak' => set_value('Kontak'),
		    'email' => set_value('email'),
		    'Posisi' => set_value('Posisi'),
		);
		$this->Pembimbinglapangan_model->insert($data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idPerusahaan' => $this->input->post('idPerusahaan',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'Kontak' => $this->input->post('Kontak',TRUE),
		'email' => $this->input->post('email',TRUE),
		'Posisi' => $this->input->post('Posisi',TRUE),
	    );

            $this->Pembimbinglapangan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pembimbinglapangan_model->get_by_id($id);

        if ($row) {
            $data = array(
		'idDosenL' => set_value('idDosenL', $row->idDosenL),
		'idPerusahaan' => set_value('idPerusahaan', $row->idPerusahaan),
		'Nama' => set_value('Nama', $row->Nama),
		'Kontak' => set_value('Kontak', $row->Kontak),
		'email' => set_value('email', $row->email),
		'Posisi' => set_value('Posisi', $row->Posisi),
	    );
            $this->load->view('pembimbinglapangan/pembimbinglapangan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idDosenL', TRUE));
        } else {
            $data = array(
		'idPerusahaan' => $this->input->post('idPerusahaan',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'Kontak' => $this->input->post('Kontak',TRUE),
		'email' => $this->input->post('email',TRUE),
		'Posisi' => $this->input->post('Posisi',TRUE),
	    );

            $this->Pembimbinglapangan_model->update($this->input->post('idDosenL', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pembimbinglapangan_model->get_by_id($id);

        if ($row) {
            $this->Pembimbinglapangan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('idPerusahaan', 'idperusahaan', 'trim|required');
		$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('Kontak', 'kontak', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('Posisi', 'posisi', 'trim|required');

		$this->form_validation->set_rules('idDosenL', 'idDosenL', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}