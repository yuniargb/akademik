<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('keuangan_model');
        $this->load->model('nilai_model');
        $this->load->model('siswa_model');
        $this->load->helper('url');
    }
    // 
    public function index()
    {

        $data['nilai'] = $this->nilai_model->get_nilai($this->session->userdata('nip'))->result();

        $data['kelas'] = $this->nilai_model->get_kelas($this->session->userdata('nip'))->result();
        $data['mapel'] = $this->nilai_model->get_mapel($this->session->userdata('nip'));

        $this->load->view('guru_user/header');
        $this->load->view('guru_user/menu');
        $this->load->view('nilai/tampilan_datanilai', $data);
        $this->load->view('template/footer');
    }

    public function form_input()
    {
        $data['siswa'] = $this->nilai_model->get_data($this->session->userdata('nip'));
        $data['mapel'] = $this->nilai_model->get_mapel($this->session->userdata('nip'));
        $this->load->view('guru_user/header');
        $this->load->view('guru_user/menu');
        $this->load->view('nilai/form_input_nilai', $data);
        $this->load->view('template/footer');
    }

    public function insert()
    {
        $data = array(
            'nis' => $this->input->post('nis'),
            'nip' => $this->session->userdata('nip'),
            'konigtif' => $this->input->post('konigtif'),
            'psikomotor' => $this->input->post('psikomotor'),
            'afektif' => $this->input->post('afektif'),
            'id_mapel' => $this->input->post('mapel')
        );
        //melakukkan insert data jurusan
        $this->nilai_model->insert($data);
        return redirect('nilai');
    }

    public function edit($params = '')
    {
        $data['nilai'] = $this->nilai_model->edit($params)->row();
        $this->load->view('guru_user/header');
        $this->load->view('guru_user/menu');
        $this->load->view('nilai/edit', $data);
        $this->load->view('template/footer');
    }

    public function cekNilai()
    {
        $data['nilai'] = $this->nilai_model->cekNilai($this->session->userdata('nis'))->result();
        $this->load->view('siswa_user/header');
        $this->load->view('siswa_user/menu');
        $this->load->view('nilai/ceknilai', $data);
        $this->load->view('template/footer');
    }
    public function nilaiSiswa()
    {

        ob_start();
        $tanggal = date('d-m-Y');
        $nilai =  $this->nilai_model->cekNilai($this->session->userdata('nis'));
        $data['nilai'] = $nilai->result();
        $data['rows'] = $nilai->row();
        $this->load->view('nilai/cetaks', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('nilai-' . $tanggal . '.pdf');
    }


    public function cetak()
    {
        ob_start();
        $tanggal = date('d-m-Y');
        $dataNilai     = $this->nilai_model->cetak_nilai($this->input->post('kelas'), $this->input->post('mapel'), $this->session->userdata('nip'));
        $data['result']     = $dataNilai->result();
        $data['rows']     = $dataNilai->row();
        $this->load->view('nilai/cetak', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('nilai-' . $tanggal . '.pdf');
    }

    public function delete($params = '')
    {
        $this->nilai_model->delete($params);
        return redirect('nilai');
    }

    public function update()
    {
        $data = array(
            'konigtif'     => $this->input->post('konigtif'),
            'psikomotor'     => $this->input->post('psikomotor'),
            'afektif'     => $this->input->post('afektif'),
        );
        $this->nilai_model->update($data, $this->input->post('id'));
        return redirect('nilai');
    }
}
