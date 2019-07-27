<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mapel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mapel_model');
		$this->load->helper('url');
	}

	public function index(){
		
		$data['mapel'] = $this->mapel_model->get_data();
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('mapel/tampilan_datamapel', $data);
		$this->load->view('template/footer');	
	}

	public function form_input(){
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('mapel/form_input_mapel');
		$this->load->view('template/footer');	

	}

	public function insert() {
		$data = array(
			'id_mapel'	 => $this->input->post('id_mapel'),
			'nama_mapel' 	=> $this->input->post('nama_mapel'),
				);
			//melakukkan insert data jurusan
			$this->mapel_model->insert($data);
			return redirect('mapel');
	}

	public function edit($params = '') {
		$data['result'] = $this->mapel_model->edit($params);
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('mapel/edit', $data);
		$this->load->view('template/footer');	
	}


	public function update() {
		$id_mapel = $this->input->post('id_mapel');
		$nama_mapel = $this->input->post('nama_mapel');
		$params = array($nama_mapel,$id_mapel);
		$this->mapel_model->update($params);
		return redirect('mapel');
	}

	public function delete($params = ''){
		$this->mapel_model->delete($params);
		return redirect('mapel');
	}
}
