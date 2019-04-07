<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembimbingdosen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pembimbingdosen_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pembimbingdosen/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pembimbingdosen/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pembimbingdosen/index.html';
            $config['first_url'] = base_url() . 'pembimbingdosen/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pembimbingdosen_model->total_rows($q);
        $pembimbingdosen = $this->Pembimbingdosen_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pembimbingdosen_data' => $pembimbingdosen,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pembimbingdosen/pembimbingdosen_list', $data);
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
            $this->load->view('pembimbingdosen/pembimbingdosen_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembimbingdosen'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pembimbingdosen/create_action'),
	    'idUser' => set_value('idUser'),
	    'Nama' => set_value('Nama'),
	    'NIP' => set_value('NIP'),
	    'Spesialis' => set_value('Spesialis'),
	    'kontak' => set_value('kontak'),
	);
        $this->load->view('pembimbingdosen/pembimbingdosen_form', $data);
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
            redirect(site_url('pembimbingdosen'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pembimbingdosen_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pembimbingdosen/update_action'),
		'idUser' => set_value('idUser', $row->idUser),
		'Nama' => set_value('Nama', $row->Nama),
		'NIP' => set_value('NIP', $row->NIP),
		'Spesialis' => set_value('Spesialis', $row->Spesialis),
		'kontak' => set_value('kontak', $row->kontak),
	    );
            $this->load->view('pembimbingdosen/pembimbingdosen_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembimbingdosen'));
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
            redirect(site_url('pembimbingdosen'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pembimbingdosen_model->get_by_id($id);

        if ($row) {
            $this->Pembimbingdosen_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pembimbingdosen'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembimbingdosen'));
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

/* End of file Pembimbingdosen.php */
/* Location: ./application/controllers/Pembimbingdosen.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-07 14:25:03 */
/* http://harviacode.com */