<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Guru extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('guru_model');
		$this->load->model('agama_model');
		$this->load->helper('url');
	}

	public function index()
	{

		$data['guru'] = $this->guru_model->get_data();
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('guru/tampilan_dataguru', $data);
		$this->load->view('template/footer');
	}

	public function form_input()
	{
		$data['agama'] = $this->agama_model->get_data();
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('guru/input_guru', $data);
		$this->load->view('template/footer');
	}

	public function form_password()
	{
		$this->load->view('guru_user/header');
		$this->load->view('guru_user/menu');
		$this->load->view('guru_user/ubah_password');
		$this->load->view('template/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nip', 'nip', 'required|is_unique[guru.nip]');
		$data = array(
			'nip'	 => $this->input->post('nip'),
			'nama_guru' 	=> $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('lahir'),
			'tanggal_lahir' => $this->input->post('tgllahir'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jk'),
			'id_agama' => $this->input->post('agama'),
			'jabatan' => $this->input->post('jabatan'),
			'no_telp' => $this->input->post('notelp'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('nip'))
		);
		//melakukkan insert data guru

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'NIP Sudah pernah diinput');
			return redirect('guru/form_input');
		} else {
			$this->guru_model->insert($data);
			return redirect('guru');
		}
	}

	public function edit($params = '')
	{
		$data['result'] = $this->guru_model->edit($params);
		$data['agama'] = $this->agama_model->get_data();
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('guru/edit_guru', $data);
		$this->load->view('template/footer');
	}

	public function profil()
	{
		$data['g'] = $this->guru_model->get_profil($this->session->userdata('nip'))->row();
		$this->load->view('guru_user/header');
		$this->load->view('guru_user/menu');
		$this->load->view('guru_user/profile', $data);
		$this->load->view('template/footer');
	}


	public function update()
	{
		$nip = $this->input->post('nip');
		$nama_guru = $this->input->post('nama');
		$tempat_lahir = $this->input->post('lahir');
		$tanggal_lahir = $this->input->post('tgllahir');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jk');
		$id_agama = $this->input->post('agama');
		$jabatan = $this->input->post('jabatan');
		$no_telp = $this->input->post('notelp');
		$email = $this->input->post('email');
		$params = array($nama_guru, $tempat_lahir, $tanggal_lahir,  $alamat,  $jenis_kelamin,  $id_agama,  $jabatan, $no_telp, $email, $nip);
		$this->guru_model->update($params);
		return redirect('guru');
	}

	public function ubahPassword()
	{
		$where = array(
			'nip' => $this->session->userdata('nip'),
			'password' => md5($this->input->post('passwordl'))
		);
		$cek = $this->guru_model->password($where, 'guru')->row();
		if ($cek) {
			if ($this->input->post('passwordb') == $this->input->post('passwordub')) {
				$data = array(
					'password'     => md5($this->input->post('passwordb')),
				);
				$this->guru_model->updatePassword($data, $where);
				$this->session->set_flashdata('cek', 'ubah password berhasil!');
				return redirect('guru/form_password');
			} else {
				$this->session->set_flashdata('cek', 'ubah password gagal! password baru tidak sesuai');
				return redirect('guru/form_password');
			}
		} else {
			$this->session->set_flashdata('cek', 'ubah password gagal! password lama tidak cocok');
			return redirect('guru/form_password');
		}
	}

	public function delete($params = '')
	{
		$this->guru_model->delete($params);
		return redirect('guru');
	}
}
