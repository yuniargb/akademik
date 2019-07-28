<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jadwal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('jadwal_model');
		$this->load->model('tahun_akademik_model');
		$this->load->model('jurusan_model');
		$this->load->model('kelas_model');
		$this->load->model('mapel_model');
		$this->load->model('guru_model');
		$this->load->helper('url');
	}
	// sda
	public function index()
	{

		$data['jadwal'] = $this->jadwal_model->get_data();
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('jadwal/tampilan_datajadwal', $data);
		$this->load->view('template/footer');
	}

	public function form_input()
	{
		$data['tahun'] = $this->tahun_akademik_model->get_data();
		$data['jurusan'] = $this->jurusan_model->get_data();
		$data['kelas'] = $this->kelas_model->get_data();
		$data['mapel'] = $this->mapel_model->get_data();
		$data['guru'] = $this->guru_model->get_data();
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('jadwal/form_input_jadwal', $data);
		$this->load->view('template/footer');
	}
	public function edit($id = null)
	{
		$data['tahun'] = $this->tahun_akademik_model->get_data();
		$data['jurusan'] = $this->jurusan_model->get_data();
		$data['kelas'] = $this->kelas_model->get_data();
		$data['mapel'] = $this->mapel_model->get_data();
		$data['guru'] = $this->guru_model->get_data();
		$data['j'] = $this->jadwal_model->get_edit($id)->row();
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('jadwal/edit', $data);
		$this->load->view('template/footer');
	}

	public function cekJadwal()
	{
		$data['j'] = $this->jadwal_model->jadwalSiswa($this->session->userdata('nis'))->result();
		$this->load->view('siswa_user/header');
		$this->load->view('siswa_user/menu');
		$this->load->view('jadwal/cekjadwal', $data);
		$this->load->view('template/footer');
	}

	public function insert()
	{
		$data = array(

			'id_jadwal'	 => $this->input->post('id_jadwal'),
			'id_tahun'	 => $this->input->post('id_tahun'),
			'kelas' => $this->input->post('kelas'),
			'id_mapel' => $this->input->post('mapel'),
			'nip' => $this->input->post('nip'),
			'jam' => $this->input->post('jam'),
			'ruangan' => $this->input->post('ruangan'),
			'hari' => $this->input->post('hari'),

		);
		//melakukkan insert data guru
		$this->jadwal_model->insert($data);
		return redirect('jadwal');
	}

	public function update()
	{
		$data = array(
			'id_tahun'	 => $this->input->post('id_tahun'),
			'kelas' => $this->input->post('kelas'),
			'id_mapel' => $this->input->post('mapel'),
			'nip' => $this->input->post('nip'),
			'jam' => $this->input->post('jam'),
			'ruangan' => $this->input->post('ruangan'),
			'hari' => $this->input->post('hari'),
		);
		$this->jadwal_model->update($data, $this->input->post('id_jadwal'));
		return redirect('jadwal');
	}

	public function delete($params = '')
	{
		$this->jadwal_model->delete($params);
		return redirect('jadwal');
	}
}
