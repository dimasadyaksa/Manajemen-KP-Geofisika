<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koordinator extends CI_Controller {


	function __construct()
    {
        parent::__construct();
        $this->load->model('Koordinator_model');
        $this->load->model('Pembimbingdosen_model');
        $this->load->model('Pembimbinglapangan_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('User_m');
        $this->load->model('Pembimbinglapangan_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->view('koordinator/index');
	}
	public function tempatKP()
	{
		$string = $this->load->view('koordinator/v_tempat_kp','',true);
		echo $string;
	}
	
	public function tambahUser()
	{
		$string = $this->load->view('koordinator/v_tambah_user','', true);
		echo $string;
	}

	public function daftar()
	{
		if($this->input->post('daftar')=='1'){
			$data['title'] = 'Mahasiswa';
		}else if($this->input->post('daftar')=='2'){
			$data['title'] = 'Dosen Pembimbing';
			$this->load->view('koordinator/daftar',$data,true);
		}else if($this->input->post('daftar')=='3'){
			$data['title'] = 'Dosen Pembimbing Lapangan';
		}
		$string = $this->load->view('koordinator/daftar',$data,true);
		echo $string;
	}

	public function daftarMhs()
	{
		$data['judul'] = "Daftar Mahasiswa";
		$data['a'] = "Nama";
		$data['b'] = "NIM";
		$data['c'] = "Angkatan";
		$data['role'] = "Mahasiswa";
		$string = $this->load->view('koordinator/v_daftar',$data, true);
		echo $string;
	}
	public function daftarDp()
	{	
		$q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'Koordinator/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'Koordinator/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'Koordinator/index.html';
            $config['first_url'] = base_url() . 'Koordinator/index.html';
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
        $this->load->view('Koordinator/v_daftar_dosenpembimbing', $data);
        $this->load->view('koordinator/v_header');
        $this->load->view('koordinator/v_sidebar');
        $this->load->view('Koordinator/v_daftar_dosenpembimbing', $data); 
	}

	public function daftarDpl()
	{
		$q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'Koordinator/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'Koordinator/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'Koordinator/index.html';
            $config['first_url'] = base_url() . 'Koordinator/index.html';
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
        
        $this->load->view('Koordinator/v_daftardosenlap', $data);
		
	}
	public function read($id) 
    {
        $row = $this->Koordinator_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idUser' => $row->idUser,
		'Nama' => $row->Nama,
		'NIP' => $row->NIP,
		'kontak' => $row->kontak,
	    );
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }

    public function createUser() 
    {
        $data = array(
		    'Email' => $this->input->post('email'),
		    'Password' => $this->input->post('password'),
		    'Status' => $this->input->post('status'),
		);

		$this->User_m->insert($data);
		/*if($this->input->post('status')=="Pembimbing Dosen"){
			$this->createDp();
		}elseif ($this->input->post('status')=="Pembimbing Lapangan") {
			$this->createDpl();
		}else{
			$this->createMhs();
		}*/
    }

    public function listUser()
    {
    	$data = $this->User_m->get_all();
    	$i = 0;
    	foreach ($data as $row)
		{
			$i++;
			echo '<tr>
							<td>'.$i.'</td>
							<td>'.$row->email.'</td>
							<td>'.$row->password.'</td>
							<td>'.$row->status.'</td>
							<td>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#update_user_popup">Edit</button>
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_user_popup">Delete</button>
					</td>
				</tr>';
	       
		}
    }

    public function listMhs()
    {
    	$data = $this->Mahasiswa_model->get_all();
    	$i = 0;
    	foreach ($data as $row)
		{
			$i++;
			echo '<tr>
              <td class="text-left">'.$i.'</td>
              <td class="text-left">'.$row->Nama.'</td>
              <td class="text-left">'.$row->NIM.'</td>
              <td class="text-left">'.$row->Angkatan.'</td>
              <td class="text-left">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#update_user_popup">Detail</button>
              </td>
              </tr>';
	       
		}
    }

    public function createMhs() 
    {
    	$id = $this->User_m->lastID();
        $data = array(
        	'idUser' =>$id,
		    'Nama' => $this->input->post('Nama')
		);
		$this->Mahasiswa_model->insert($data);
    }
    
    public function createDp() 
    {
    	$id =$this->User_m->lastID();
        $data = array(
        	'idUser'=>$id,
		    'Nama' => $this->input->post('Nama')
		);
		$this->Pembimbingdosen_model->insert($data);
    }

    public function createDpl() 
    {
    	$id = $this->User_m->lastID();
    	echo $id['idUser'];
        $data = array(
        	'idDosenL'=>$id,
		    'Nama' => $this->input->post('Nama'),
		    'Email' => $this->input->post('email')
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
		'idUser' => $this->input->post('idUser',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'kontak' => $this->input->post('kontak',TRUE),
	    );

            $this->Koordinator_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
        }
    }
    
    public function update($id) 
    {
        $row = $this->Koordinator_model->get_by_id($id);

        if ($row) {
            $data = array(
		'idUser' => set_value('idUser', $row->idUser),
		'Nama' => set_value('Nama', $row->Nama),
		'NIP' => set_value('NIP', $row->NIP),
		'kontak' => set_value('kontak', $row->kontak),
	    );
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
		'kontak' => $this->input->post('kontak',TRUE),
	    );

            $this->Koordinator_model->update($this->input->post('NIP', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Koordinator_model->get_by_id($id);

        if ($row) {
            $this->Koordinator_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('idUser', 'iduser', 'trim|required');
		$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('kontak', 'kontak', 'trim|required');

		$this->form_validation->set_rules('NIP', 'NIP', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
