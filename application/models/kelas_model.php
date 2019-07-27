<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{

    public $table = 'kelas';
    public $id    = 'id_kelas';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { }

    public function get_data()
    {
        $sql = "SELECT k.id_kelas, k.nama_kelas, k.id_tahun,k.bayaran,t.tahun_akademik,j.nama_jurusan  
        FROM kelas k 
        INNER JOIN tahun_akademik t ON k.id_tahun=t.id_tahun
        INNER JOIN jurusan j ON k.id_jurusan=j.id_jurusan";

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
        $this->db->insert($this->table, $data);
    }

    public function edit($params)
    {
        $sql = "SELECT * FROM kelas WHERE id_kelas = ?";
        $query = $this->db->query($sql, $params);

        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function update($params)
    {
        $sql = "UPDATE kelas SET nama_kelas = ?,id_tahun = ?, bayaran= ?, id_jurusan = ? where id_kelas= ?";
        return $this->db->query($sql, $params);
    }


    public function delete($params)
    {
        $sql = "delete from kelas where id_kelas=" . $params;
        return $this->db->query($sql, $params);
    }
}
