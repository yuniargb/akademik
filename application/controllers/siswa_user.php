<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Siswa_user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
		$this->load->helper('url');
    }
    
    public function profil()
	{
		//if ($this->session->userdata('hak') != 'siswa') {
			//redirect('login');
		
		//$data['password'] = $this->siswa_model->get_siswa_nis($this->session->userdata('nis'));
		$this->load->view('siswa_user/header');
		$this->load->view('siswa_user/menu');
		$this->load->view('siswa_user/profil');
		$this->load->view('siswa_user/footer');
	//}
		}
}
	