<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data['user'] = $this->user_model->get_data()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('user/tampilan_datauser', $data);
		$this->load->view('template/footer');
	}

	public function form_input()
	{
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('user/form_input_user');
		$this->load->view('template/footer');
	}
	public function form_password()
	{
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('user/form_password');
		$this->load->view('template/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('username', 'username', 'required|is_unique[tbuser.username]');

		$data = array(
			'id_user'	 	=> $this->input->post('id_user'),
			'nama_user' 	=> $this->input->post('nama_user'),
			'username' 		=> $this->input->post('username'),
			'password' 		=> md5($this->input->post('username')),
			'level' 		=> $this->input->post('level')
		);

		if ($this->form_validation->run() == FALSE) {
			return redirect('user/form_input');
		} else {
			//melakukkan insert data jurusan
			$this->user_model->insert($data, 'tbuser');
			return redirect('user');
		}
	}

	public function edit($params = '')
	{
		$data['user'] = $this->user_model->edit($params);
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('user/edit', $data);
		$this->load->view('template/footer');
	}


	public function update()
	{
		$data = array(
			'nama_user' 	=> $this->input->post('nama_user'),
			'level' 		=> $this->input->post('level')
		);
		$this->user_model->update($data, $this->input->post('id_user'));
		return redirect('user');
	}

	public function delete($params = '')
	{
		$this->user_model->delete($params);
		return redirect('user');
	}

	public function ubahPassword()
	{
		$where = array(
			'username' => $this->session->userdata('username'),
			'password' => md5($this->input->post('passwordl'))
		);
		$cek = $this->user_model->password($where, 'tbuser')->row();
		if ($cek) {
			if ($this->input->post('passwordb') == $this->input->post('passwordub')) {
				$data = array(
					'password'     => md5($this->input->post('passwordb')),
				);
				$this->user_model->updatePassword($data, $where);
				$this->session->set_flashdata('cek', 'ubah password berhasil!');
				return redirect('user/form_password');
			} else {
				$this->session->set_flashdata('cek', 'ubah password gagal! password baru tidak sesuai');
				return redirect('user/form_password');
			}
		} else {
			$this->session->set_flashdata('cek', 'ubah password gagal! password lama tidak cocok');
			return redirect('user/form_password');
		}
	}
}
