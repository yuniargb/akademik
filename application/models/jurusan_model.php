<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model {
    public $table = 'jurusan';
    public $id    = 'id_jurusan';

	public function __construct() 
	{ 
 		parent::__construct();
    } 

   public function index() {} 
    
 	public function get_data(){ 
 		   $sql = "SELECT id_jurusan, nama_jurusan FROM jurusan"; 

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

    public function edit($params){
        $sql = "SELECT * FROM jurusan WHERE id_jurusan = ?";
        $query = $this->db->query($sql, $params);

        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
           return array();
        }
    }

    public function update($params){
		$sql = "UPDATE jurusan SET nama_jurusan = ? where id_jurusan= ?";
		return $this->db->query($sql, $params);
	}


    public function delete($params){
        $sql = "delete from jurusan where id_jurusan=".$params;
        return $this->db->query($sql, $params);
    }
}
