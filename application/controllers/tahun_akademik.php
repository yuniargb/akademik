<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tahun_akademik extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tahun_akademik_model');
		$this->load->helper('url');
	}

	public function index()
	{

		$data['tahun_akademik'] = $this->tahun_akademik_model->get_data();
		$data['title'] = 'Kelola Jurusan';
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('tahun/tampilan_tahunakademik', $data);
		$this->load->view('template/footer');
	}

	public function form_input()
	{
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('tahun/form_input_tahunakademik');
		$this->load->view('template/footer');
	}

	public function insert()
	{
		$data = array(
			'id_tahun'	 => $this->input->post('id_tahun'),
			'tahun_akademik' 	=> $this->input->post('tahun_akademik'),
		);
		//melakukkan insert data jurusan
		$this->tahun_akademik_model->insert($data);
		return redirect('tahun_akademik');
	}

	public function edit($params = '')
	{
		$data['result'] = $this->tahun_akademik_model->get_edit($params);
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('tahun/edit', $data);
		$this->load->view('template/footer');
	}


	public function update()
	{
		$id_tahun = $this->input->post('id_tahun');
		$tahun_akademik = $this->input->post('tahun_akademik');
		$params = array($tahun_akademik, $id_tahun);
		$this->tahun_akademik_model->update($params);
		return redirect('tahun_akademik');
	}

	public function delete($params = '')
	{
		$this->tahun_akademik_model->delete($params);
		return redirect('tahun_akademik');
	}
}
