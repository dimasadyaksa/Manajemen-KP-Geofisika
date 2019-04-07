<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembimbinglapangan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pembimbinglapangan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pembimbinglapangan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pembimbinglapangan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pembimbinglapangan/index.html';
            $config['first_url'] = base_url() . 'pembimbinglapangan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pembimbinglapangan_model->total_rows($q);
        $pembimbinglapangan = $this->Pembimbinglapangan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pembimbinglapangan_data' => $pembimbinglapangan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pembimbinglapangan/pembimbinglapangan_list', $data);
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
            $this->load->view('pembimbinglapangan/pembimbinglapangan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembimbinglapangan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pembimbinglapangan/create_action'),
	    'idDosenL' => set_value('idDosenL'),
	    'idPerusahaan' => set_value('idPerusahaan'),
	    'Nama' => set_value('Nama'),
	    'Kontak' => set_value('Kontak'),
	    'email' => set_value('email'),
	    'Posisi' => set_value('Posisi'),
	);
        $this->load->view('pembimbinglapangan/pembimbinglapangan_form', $data);
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
            redirect(site_url('pembimbinglapangan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pembimbinglapangan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pembimbinglapangan/update_action'),
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
            redirect(site_url('pembimbinglapangan'));
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
            redirect(site_url('pembimbinglapangan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pembimbinglapangan_model->get_by_id($id);

        if ($row) {
            $this->Pembimbinglapangan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pembimbinglapangan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembimbinglapangan'));
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

/* End of file Pembimbinglapangan.php */
/* Location: ./application/controllers/Pembimbinglapangan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-07 16:48:03 */
/* http://harviacode.com */