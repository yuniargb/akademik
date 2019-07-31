<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public $table = 'tbuser';
    public $id    = 'id_user';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { }

    public function get_data()
    {
        $sql = "SELECT * FROM tbuser";

        $query = $this->db->query($sql);
        return $query;
    }

    public function get_profil($user)
    {
        $sql = "SELECT * FROM tbuser WHERE username='" . $user . "'";

        $query = $this->db->query($sql);
        return $query;
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function edit($params)
    {
        $sql = "SELECT * FROM tbuser WHERE id_user = " . $params;

        $query = $this->db->query($sql);
        return $query->row();
    }

    public function update($data, $user)
    {
        $this->db->where('id_user', $user);
        return $this->db->update($this->table, $data);
    }


    public function delete($params)
    {
        $sql = "delete from tbuser where id_user=" . $params;
        return $this->db->query($sql, $params);
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
}
