<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kelas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kelas_model');
		$this->load->model('tahun_akademik_model');
		$this->load->model('jurusan_model');
		$this->load->helper('url');
	}

	public function index()
	{

		$data['kelas'] = $this->kelas_model->get_data();
		$data['title'] = 'Kelola Jurusan';
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('kelas/tampilan_datakelas', $data);
		$this->load->view('template/footer');
	}

	public function form_input()
	{
		$data['tahun'] = $this->tahun_akademik_model->get_data();
		$data['jurusan'] = $this->jurusan_model->get_data();
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('kelas/form_input_kelas', $data);
		$this->load->view('template/footer');
	}

	public function insert()
	{
		$data = array(
			'id_kelas'	 => $this->input->post('id_kelas'),
			'nama_kelas' 	=> $this->input->post('nama_kelas'),
			'id_tahun' 	=> $this->input->post('id_tahun'),
			'bayaran' 	=> $this->input->post('bayaran'),
			'id_jurusan' 	=> $this->input->post('jurusan')
		);
		//melakukkan insert data kelas
		$this->kelas_model->insert($data);
		return redirect('kelas');
	}

	public function edit($params = '')
	{
		$data['result'] = $this->kelas_model->edit($params);
		$data['tahun'] = $this->tahun_akademik_model->get_data();
		$data['jurusan'] = $this->jurusan_model->get_data();
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('kelas/edit', $data);
		$this->load->view('template/footer');
	}


	public function update()
	{
		$id_kelas = $this->input->post('id_kelas');
		$nama_kelas = $this->input->post('nama_kelas');
		$id_tahun = $this->input->post('id_tahun');
		$bayaran = $this->input->post('bayaran');
		$jurusan = $this->input->post('jurusan');
		$params = array($nama_kelas, $id_tahun,$bayaran,$jurusan, $id_kelas);
		$this->kelas_model->update($params);
		return redirect('kelas');
	}

	public function delete($params = '')
	{
		$this->kelas_model->delete($params);
		return redirect('kelas');
	}
}
