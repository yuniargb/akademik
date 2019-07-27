<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
		$this->load->model('agama_model');
		$this->load->model('kelas_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['siswa'] = $this->siswa_model->get_data();
		$data['title'] = 'Kelola Jurusan';
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('siswa/tampilan_datasiswa', $data);
		$this->load->view('template/footer');
	}

	public function form_input()
	{
		$data['agama'] = $this->agama_model->get_data();
		$data['kelas'] = $this->kelas_model->get_data();
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('siswa/form_input_siswa', $data);
		$this->load->view('template/footer');
	}

	public function insert()
	{
		$data = array(
			'nis'	 => $this->input->post('nis'),
			'nama_siswa' 	=> $this->input->post('nama_siswa'),
			'alamat' => $this->input->post('alamat'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
			'email' => $this->input->post('email'),
			'no_telpon' => $this->input->post('no_telpon'),
			'golongan_darah' => $this->input->post('golongan_darah'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'asal_sekolah' => $this->input->post('asal_sekolah'),
			'id_kelas' => $this->input->post('kelas'),
			'password' => md5($this->input->post('nis')),
		);
		//melakukkan insert data siswa
		$this->siswa_model->insert($data);
		return redirect('siswa');
	}

	public function profil()
	{
		$data['s'] = $this->siswa_model->get_profil($this->session->userdata('nis'))->row();
		$this->load->view('siswa_user/header');
		$this->load->view('siswa_user/menu');
		$this->load->view('siswa_user/profile', $data);
		$this->load->view('template/footer');
	}

	public function edit($params = '')
	{
		$data['result'] = $this->siswa_model->edit($params);
		$data['agama'] = $this->agama_model->get_data();
		$data['kelas'] = $this->kelas_model->get_data();
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('siswa/edit', $data);
		$this->load->view('template/footer');
	}


	public function update()
	{
		$data = array(
			'nama_siswa' 	=> $this->input->post('nama_siswa'),
			'alamat' => $this->input->post('alamat'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
			'email' => $this->input->post('email'),
			'no_telpon' => $this->input->post('no_telpon'),
			'golongan_darah' => $this->input->post('golongan_darah'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'asal_sekolah' => $this->input->post('asal_sekolah'),
			'id_kelas' => $this->input->post('kelas'),
		);
		$this->siswa_model->update($data, $this->input->post('nis'));
		return redirect('siswa');
	}

	public function delete($params = '')
	{
		$this->siswa_model->delete($params);
		return redirect('siswa');
	}
}
