<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tahun_akademik_model extends CI_Model
{
    public $table = 'tahun_akademik';
    public $id    = 'id_tahun';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        $sql = "SELECT id_tahun, tahun_akademik FROM tahun_akademik";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    public function get_edit($id)
    {
        $sql = "SELECT id_tahun, tahun_akademik FROM tahun_akademik WHERE id_tahun= ?";

        $query = $this->db->query($sql, $id);
        if ($query->num_rows() > 0) {
            $result = $query->row();
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
        $sql = "SELECT * FROM tahun_akademik WHERE id_tahun = ?";
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
        $sql = "UPDATE tahun_akademik SET tahun_akademik = ? where id_tahun= ?";
        return $this->db->query($sql, $params);
    }


    public function delete($params)
    {
        $sql = "delete from tahun_akademik where id_tahun=" . $params;
        return $this->db->query($sql, $params);
    }
}
