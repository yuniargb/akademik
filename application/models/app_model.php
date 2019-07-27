<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	public function proseslogin($user, $pass)
	{
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		return $this->db->get('tbuser')->row();
	}
	public function prosesloginguru($user, $pass)
	{
		$this->db->where('nip', $user);
		$this->db->where('password', $pass);
		return $this->db->get('guru')->row();
	}

	public function prosesloginsiswa($user, $pass)
	{
		$this->db->where('nis', $user);
		$this->db->where('password', $pass);
		return $this->db->get('siswa')->row();
	}

	public function login_siswa()
	{
		$data = array(
			'nis' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$query = $this->db->get_where('siswa', $data);

		if ($query->num_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_siswa()
	{
		$data = array(
			'nis' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$query = $this->db->get_where('siswa', $data);
		return $query;
	}
}
