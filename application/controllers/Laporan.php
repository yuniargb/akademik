<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kelas_model');
        $this->load->model('keuangan_model');
        $this->load->model('nilai_model');
        $this->load->helper('url');
    }

    public function periode()
    {

        $data['kelas'] = $this->kelas_model->get_data();
        $data['title'] = 'Kelola Jurusan';
        $this->load->view('template/header', $data);
        $this->load->view('template/tampilan_menu', $data);
        $this->load->view('laporan/periode', $data);
        $this->load->view('template/footer');
    }
    public function keuangan()
    {

        ob_start();
        $tanggal = date('d-m-Y');
        $data['cetak']     = $this->keuangan_model->laporan($this->input->post("awal"), $this->input->post("akhir"))->result();
        $this->load->view('laporan/keuangan', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('laporan-keuangan-' . $tanggal . '.pdf');
    }
    public function kelas()
    {

        $data['kelas'] = $this->kelas_model->get_data();
        $data['title'] = 'Kelola Jurusan';
        $this->load->view('template/header', $data);
        $this->load->view('template/tampilan_menu', $data);
        $this->load->view('laporan/kelas', $data);
        $this->load->view('template/footer');
    }
    public function nilai()
    {

        ob_start();
        $tanggal = date('d-m-Y');
        $data['cetak']     = $this->nilai_model->laporan($this->input->post("kelas"))->result();
        $this->load->view('laporan/jadwal', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('laporan-keuangan-' . $tanggal . '.pdf');
    }
}
