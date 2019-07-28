<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    public $table = 'siswa';
    public $id    = 'nis';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { }

    public function get_data()
    {
        $sql = "SELECT s.nis, s.nama_siswa, s.alamat,k.bayaran, s.tempat_lahir, s.tanggal_lahir, s.jenis_kelamin, s.agama, s.email, s.no_telpon, s.golongan_darah, s.nama_ayah, s.nama_ibu, s.asal_sekolah, a.nama_agama, k.nama_kelas
        FROM siswa s
        INNER JOIN agama a ON s.agama=a.id_agama
        INNER JOIN kelas k ON s.id_kelas=k.id_kelas";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function insert($data)
    {
        $nis = $this->input->post('nis');

        $this->db->insert('siswa', $data);
    }

    public function get_siswa_id($id)
    {
        $query = $this->db->get_where('siswa', array('nis' => $id));
        $siswa = $query->row();


        $data = array(
            'nim' => $siswa->nim,
            'nama_siswa' => $siswa->nama_siswa,
            'alamat' => $siswa->alamat,
            'tempat_lahir' => $siswa->tempat_lahir,
            'tanggal_lahir' => $siswa->tanggal_lahir,
            'jenis_kelamin' => $siswa->jenis_kelamin,
            'agama' => $siswa->agama,
            'email' => $siswa->email,
            'no_telpon' => $siswa->no_telpon,
            'golongan_darah' => $siswa->golongan_darah,
            'nama_ayah' => $siswa->nama_ayah,
            'nama_ibu' => $siswa->nama_ibu,
            'asal_sekolah' => $siswa->asal_sekolah,
        );

        return $data;
    }

    public function edit($params)
    {
        $sql = "SELECT * FROM siswa WHERE nis = ?";
        $query = $this->db->query($sql, $params);

        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function update($data, $nis)
    {
        $this->db->where('nis', $nis);
        return $this->db->update('siswa', $data);
    }


    public function delete($params)
    {
        $sql = "delete from siswa where nis=" . $params;
        return $this->db->query($sql, $params);
    }


    public function get_siswa_nis($nis)
    {
        $this->db->where('nis', $nis);
        $this->db->select('*');
        $this->db->from('siswa');
        $query = $this->db->get();
        return $query->row();
    }

    public function password_default($id)
    {
        $query = $this->db->get_where('siswa', array('nis' => $id));
        $row = $query->row();

        $password_default = md5($nis);

        $data = array(
            'password' => $row->password,
            'password_default' => $password_default
        );

        return $data;
    }

    public function get_profil($nis)
    {
        $sql = "SELECT *
        FROM siswa s
        INNER JOIN agama a ON s.agama=a.id_agama
        INNER JOIN kelas k ON k.id_kelas=s.id_kelas
        WHERE s.nis = '" . $nis . "'";

        return $this->db->query($sql);
    }

    public function updatePassword($data, $where)
    {
        $this->db->where($where);
        return $this->db->update($this->table, $data);
    }
}
