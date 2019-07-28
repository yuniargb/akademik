<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mapel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mapel_model');
		$this->load->helper('url');
	}

	public function index()
	{

		$data['mapel'] = $this->mapel_model->get_data();
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('mapel/tampilan_datamapel', $data);
		$this->load->view('template/footer');
	}

	public function form_input()
	{
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('mapel/form_input_mapel');
		$this->load->view('template/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('id_mapel', 'id_mapel', 'required|is_unique[mapel.id_mapel]');


		$data = array(
			'id_mapel'	 => $this->input->post('id_mapel'),
			'nama_mapel' 	=> $this->input->post('nama_mapel'),
		);

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'ID Mata Pelajaran Sudah pernah diinput');
			return redirect('mapel/form_input');
		} else {
			$this->mapel_model->insert($data);
			return redirect('mapel');
		}
		//melakukkan insert data jurusan

	}

	public function edit($params = '')
	{
		$data['result'] = $this->mapel_model->edit($params);
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('mapel/edit', $data);
		$this->load->view('template/footer');
	}


	public function update()
	{
		$id_mapel = $this->input->post('id_mapel');
		$nama_mapel = $this->input->post('nama_mapel');
		$params = array($nama_mapel, $id_mapel);
		$this->mapel_model->update($params);
		return redirect('mapel');
	}

	public function delete($params = '')
	{
		$this->mapel_model->delete($params);
		return redirect('mapel');
	}
}
