<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agama_model extends CI_Model
{

    public $table = 'agama';
    public $id    = 'id_agama';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { }

    public function get_data()
    {
        $sql = "SELECT id_agama, nama_agama FROM agama";

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
        $sql = "SELECT * FROM agama WHERE id_agama = ?";
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
        $sql = "UPDATE agama SET nama_agama= ? where id_agama= ?";
        return $this->db->query($sql, $params);
    }


    public function delete($params)
    {
        $sql = "delete from agama where id_agama=" . $params;
        return $this->db->query($sql, $params);
    }
}
