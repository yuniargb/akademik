<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_model extends CI_Model
{
    public $table = 'guru';
    public $id    = 'nip';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { }

    public function get_data()
    {
        $sql = "SELECT g.nip, g.nama_guru, g.tempat_lahir, g.tanggal_lahir, g.alamat, g.jenis_kelamin, g.id_agama, g.jabatan, g.no_telp, g.email, a.nama_agama
        FROM guru g
        INNER JOIN agama a ON g.id_agama=a.id_agama";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    public function get_profil($nip)
    {
        $sql = "SELECT g.nip, g.nama_guru, g.tempat_lahir, g.tanggal_lahir, g.alamat, g.jenis_kelamin, g.id_agama, g.jabatan, g.no_telp, g.email, a.nama_agama
        FROM guru g
        INNER JOIN agama a ON g.id_agama=a.id_agama
        WHERE g.nip = '" . $nip . "'";

        return $this->db->query($sql);
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function edit($params)
    {
        $sql = "SELECT * FROM guru WHERE nip = ?";
        $query = $this->db->query($sql, $params);

        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    public function password($where, $table = null)
    {
        return $this->db->get_where($table, $where);
    }

    public function updatePassword($data, $where)
    {
        $this->db->where($where);
        return $this->db->update($this->table, $data);
    }

    public function update($params)
    {
        $sql = "UPDATE guru SET nama_guru = ?, tempat_lahir = ?, tanggal_lahir = ?, alamat = ?, jenis_kelamin = ?, id_agama = ?, jabatan= ?, no_telp = ?, email= ? where nip= ?";
        return $this->db->query($sql, $params);
    }


    public function delete($params)
    {
        $sql = "delete from guru where nip=" . $params;
        return $this->db->query($sql, $params);
    }
}
