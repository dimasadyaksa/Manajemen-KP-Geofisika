<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('mahasiswa/index');
    }
    public function datadiri()
    {
        $this->load->view('mahasiswa/v_header');
        $this->load->view('mahasiswa/v_sidebar');
        $this->load->view('mahasiswa/v_datadiri');
    }
    public function logbook()
    {
        $this->load->view('mahasiswa/v_header');
        $this->load->view('mahasiswa/v_sidebar');
        $this->load->view('mahasiswa/v_logbook');
    }
    public function PLapangan()
    {
        $this->load->view('mahasiswa/v_header');
        $this->load->view('mahasiswa/v_sidebar');
        $this->load->view('mahasiswa/v_pembimbing_lapangan');
    }
    public function TPraktik()
    {
        $this->load->view('mahasiswa/v_header');
        $this->load->view('mahasiswa/v_sidebar');
        $this->load->view('mahasiswa/v_tempatPraktik');
    }
    public function read($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idUser' => $row->idUser,
		'idLogbook' => $row->idLogbook,
		'Nama' => $row->Nama,
		'NIM' => $row->NIM,
		'IPK' => $row->IPK,
		'SKS' => $row->SKS,
		'Angkatan' => $row->Angkatan,
		'JudulProposal' => $row->JudulProposal,
	    );
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }

    public function create() 
    {
        $data = array(
        'idUser' => set_value('idUser'),
	    'idLogbook' => set_value('idLogbook'),
	    'Nama' => set_value('Nama'),
	    'NIM' => set_value('NIM'),
	    'IPK' => set_value('IPK'),
	    'SKS' => set_value('SKS'),
	    'Angkatan' => set_value('Angkatan'),
	    'JudulProposal' => set_value('JudulProposal'),
	);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idUser' => $this->input->post('idUser',TRUE),
		'idLogbook' => $this->input->post('idLogbook',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'IPK' => $this->input->post('IPK',TRUE),
		'SKS' => $this->input->post('SKS',TRUE),
		'Angkatan' => $this->input->post('Angkatan',TRUE),
		'JudulProposal' => $this->input->post('JudulProposal',TRUE),
	    );

            $this->Mahasiswa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
        }
    }
    
    public function update($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);

        if ($row) {
            $data = array(
        'idUser' => set_value('idUser', $row->idUser),
		'idLogbook' => set_value('idLogbook', $row->idLogbook),
		'Nama' => set_value('Nama', $row->Nama),
		'NIM' => set_value('NIM', $row->NIM),
		'IPK' => set_value('IPK', $row->IPK),
		'SKS' => set_value('SKS', $row->SKS),
		'Angkatan' => set_value('Angkatan', $row->Angkatan),
		'JudulProposal' => set_value('JudulProposal', $row->JudulProposal),
	    );
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('NIM', TRUE));
        } else {
            $data = array(
		'idUser' => $this->input->post('idUser',TRUE),
		'idLogbook' => $this->input->post('idLogbook',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'IPK' => $this->input->post('IPK',TRUE),
		'SKS' => $this->input->post('SKS',TRUE),
		'Angkatan' => $this->input->post('Angkatan',TRUE),
		'JudulProposal' => $this->input->post('JudulProposal',TRUE),
	    );

            $this->Mahasiswa_model->update($this->input->post('NIM', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);

        if ($row) {
            $this->Mahasiswa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idUser', 'iduser', 'trim|required');
	$this->form_validation->set_rules('idLogbook', 'idlogbook', 'trim|required');
	$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('IPK', 'ipk', 'trim|required');
	$this->form_validation->set_rules('SKS', 'sks', 'trim|required');
	$this->form_validation->set_rules('Angkatan', 'angkatan', 'trim|required');
	$this->form_validation->set_rules('JudulProposal', 'judulproposal', 'trim|required');

	$this->form_validation->set_rules('NIM', 'NIM', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-08 02:47:42 */
/* http://harviacode.com */