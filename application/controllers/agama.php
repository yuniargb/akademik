<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Agama extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('agama_model');
		$this->load->helper('url');
	}

	public function index(){
		
		$data['agama'] = $this->agama_model->get_data();
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('agama/tampilan_dataagama', $data);
		$this->load->view('template/footer');	
	}

	public function form_input(){
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('agama/form_input_agama');
		$this->load->view('template/footer');	

	}

	public function insert() {
		$data = array(
			'id_agama'	 => $this->input->post('id_agama'),
			'nama_agama' 	=> $this->input->post('nama_agama'),
				);
			//melakukkan insert data agama
			$this->agama_model->insert($data);
			return redirect('agama');
	}

	public function edit($params = '') {
		$data['result'] = $this->agama_model->edit($params);
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('agama/edit', $data);
		$this->load->view('template/footer');	
	}


	public function update() {
		$id_agama = $this->input->post('id_agama');
		$nama_agama = $this->input->post('nama_agama');
		$params = array($nama_agama,$id_agama);
		$this->agama_model->update($params);
		return redirect('agama');
	}

	public function delete($params = ''){
		$this->agama_model->delete($params);
		return redirect('agama');
	}
}
