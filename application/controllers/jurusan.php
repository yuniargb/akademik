<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jurusan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('jurusan_model');
		$this->load->helper('url');
	}

	public function index(){
		
		$data['jurusan'] = $this->jurusan_model->get_data();
		$data['title'] = 'Kelola Jurusan';
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('jurusan/tampilan_datajurusan', $data);
		$this->load->view('template/footer');	
	}

	public function form_input(){
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('jurusan/form_input_jurusan');
		$this->load->view('template/footer');	

	}

	public function insert() {
		$data = array(
			'id_jurusan'	 => $this->input->post('id_jurusan'),
			'nama_jurusan' 	=> $this->input->post('nama_jurusan'),
				);
			//melakukkan insert data jurusan
			$this->jurusan_model->insert($data);
			return redirect('jurusan');
	}

	public function edit($params = '') {
		$data['result'] = $this->jurusan_model->edit($params);
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('jurusan/edit', $data);
		$this->load->view('template/footer');	
	}


	public function update() {
		$id_jurusan = $this->input->post('id_jurusan');
		$nama_jurusan = $this->input->post('nama_jurusan');
		$params = array($nama_jurusan,$id_jurusan);
		$this->jurusan_model->update($params);
		return redirect('jurusan');
	}

	public function delete($params = ''){
		$this->jurusan_model->delete($params);
		return redirect('jurusan');
	}
}
