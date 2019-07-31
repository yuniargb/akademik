<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('app_model', 'model_squrity');
	}

	public function index()
	{
		switch ($this->session->userdata('hak')) {
			case 'siswa':
				redirect('siswa');
				break;

			default:
				$this->load->view('vlogin');
				break;
		}
	}

	public function ceklogin()
	{
		if (isset($_POST['login'])) {
			$user = $this->input->post('user', true);
			$pass = md5($this->input->post('pass', true));

			// login admin
			$cek = $this->app_model->proseslogin($user, $pass);
			$row = count($cek);
			// login guru
			$guru = $this->app_model->prosesloginguru($user, $pass);
			$row1 = count($guru);
			// login siswa
			$siswa = $this->app_model->prosesloginsiswa($user, $pass);
			$row2 = count($siswa);

			if ($row > 0) {
				$datalogin = $this->db->get_where('tbuser', array('username' => $user, 'password' => $pass))->row();
				$data['id_user'] = $datalogin->id_user;
				$data['username'] = $datalogin->username;

				$data_session = array(
					'username' => $datalogin->username,
					'nama' => $datalogin->nama_user,
					'status' => $datalogin->level
				);
				$this->session->set_userdata($data_session);
				redirect('welcome/vadmin');
			} elseif ($row1 > 0) {
				$datalogin = $this->db->get_where('guru', array('nip' => $user, 'password' => $pass))->row();

				$data_session = array(
					'nip' => $datalogin->nip,
					'nama' => $datalogin->nama_guru
				);
				$this->session->set_userdata($data_session);
				redirect('welcome/vguru');
			} elseif ($row2 > 0) {
				$datalogin = $this->db->get_where('siswa', array('nis' => $user, 'password' => $pass))->row();

				$data_session = array(
					'nis' => $datalogin->nis,
					'nama' => $datalogin->nama_siswa
				);
				$this->session->set_userdata($data_session);
				redirect('welcome/vsiswa');
			} else {
				redirect('welcome/index');
			}
		}
	}

	// public function cekloginguru()
	// {
	// 	if (isset($_POST['login'])) {
	// 		$user = $this->input->post('user', true);
	// 		$pass = md5($this->input->post('pass', true));
	// 		$cek = $this->app_model->prosesloginguru($user, $pass);
	// 		$hasil = count($cek);

	// 		if ($hasil > 0) {
	// 			$datalogin = $this->db->get_where('guru', array('nip' => $user, 'password' => $pass))->row();

	// 			$data_session = array(
	// 				'nip' => $datalogin->nip,
	// 				'nama' => $datalogin->nama_guru
	// 			);
	// 			$this->session->set_userdata($data_session);
	// 			redirect('welcome/vguru');
	// 		} else {
	// 			redirect('welcome/loginguru');
	// 		}
	// 	}
	// }

	// public function cekloginsiswa()
	// {
	// 	if (isset($_POST['login'])) {
	// 		$user = $this->input->post('user', true);
	// 		$pass = md5($this->input->post('pass', true));
	// 		$cek = $this->app_model->prosesloginsiswa($user, $pass);
	// 		$hasil = count($cek);

	// 		if ($hasil > 0) {
	// 			$datalogin = $this->db->get_where('siswa', array('nis' => $user, 'password' => $pass))->row();

	// 			$data_session = array(
	// 				'nis' => $datalogin->nis,
	// 				'nama' => $datalogin->nama_siswa
	// 			);
	// 			$this->session->set_userdata($data_session);
	// 			redirect('welcome/vsiswa');
	// 		} else {
	// 			redirect('welcome/loginsiswa');
	// 		}
	// 	}
	// }

	public function login()
	{

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			redirect('welcome/index');
		} else {
			$login_siswa = $this->login_model->login_siswa();
			if ($login_siswa) {
				$get_siswa = $this->app_model->get_siswa();
				$row_siswa = $get_siswa->row();

				$session_siswa = array(
					'hak' => 'siswa',
					'username' => $row_siswa->nama,
					'nis' => $row_siswa->nis
				);

				$this->session->set_userdata($session_siswa);
				redirect('welcome/vsiswa');
			}
		}
	}

	public function loginguru()
	{
		$this->load->view('vloginguru');
	}
	public function loginsiswa()
	{
		$this->load->view('vloginsiswa');
	}
	public function vadmin()
	{
		$this->load->view('template/header');
		$this->load->view('template/tampilan_menu');
		$this->load->view('vadmin');
		$this->load->view('template/footer');
	}

	public function vguru()
	{
		$this->load->view('guru_user/header');
		$this->load->view('guru_user/menu');
		$this->load->view('vguru');
		$this->load->view('template/footer');
	}

	public function vsiswa()
	{
		$this->load->view('siswa_user/header');
		$this->load->view('siswa_user/menu');
		$this->load->view('vsiswa');
		$this->load->view('template/footer');
	}

	public function vkeuangan()
	{
		$this->load->view('keuangan/header');
		$this->load->view('keuangan/menu');
		$this->load->view('vkeuangan');
		$this->load->view('keuangan/footer');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/index');
	}
	public function logoutGuru()
	{
		$this->session->sess_destroy();
		redirect('welcome/loginguru');
	}
	public function logoutSiswa()
	{
		$this->session->sess_destroy();
		redirect('welcome/loginsiswa');
	}
}
