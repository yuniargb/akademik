<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Keuangan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('keuangan_model');
		$this->load->model('siswa_model');
		$this->load->helper('url');
	}
	// 
	public function index()
	{

		$data['keuangan'] = $this->keuangan_model->get_data()->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('keuangan/tampilan_datakeuangan', $data);
		$this->load->view('template/footer');
	}
	public function cekKeuangan()
	{

		$data['keuangan'] = $this->keuangan_model->cekBayar($this->session->userdata('nis'))->result();

		$this->load->view('siswa_user/header', $data);
		$this->load->view('siswa_user/menu', $data);
		$this->load->view('keuangan/cekkeuangan', $data);
		$this->load->view('template/footer');
	}

	public function form_input()
	{
		$data['siswa'] = $this->siswa_model->get_data();
		$this->load->view('template/header', $data);
		$this->load->view('template/tampilan_menu', $data);
		$this->load->view('keuangan/form_input_keuangan', $data);
		$this->load->view('template/footer');
	}

	public function insert()
	{
		$data = array(
			'tgl_bayar' 	=> date('Y-m-d'),
			'nis' => $this->input->post('nis'),
			'bayar' => $this->input->post('bayar'),
			'pembayaran' => $this->input->post('bayaran')
		);
		//melakukkan insert data jurusan
		$this->keuangan_model->insert($data);
		return redirect('keuangan');
	}


	public function cetak($id = null)
	{
		ob_start();
		$tanggal = date('d-m-Y');
		$data['cetak'] 	= $this->keuangan_model->kwitansi($id)->row();
		$this->load->view('keuangan/cetak', $data);
		$html = ob_get_contents();
		ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P', 'A4', 'en');
		$pdf->WriteHTML($html);
		$pdf->Output('pemesanan-' . $tanggal . '.pdf');
	}

	public function delete($params = '')
	{
		$this->keuangan_model->delete($params);
		return redirect('keuangan');
	}
}
