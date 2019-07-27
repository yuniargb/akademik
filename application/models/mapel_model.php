<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel_model extends CI_Model {

    public $table = 'mapel';
    public $id    = 'id_mapel';

	public function __construct() 
	{ 
 		parent::__construct();
    } 

   public function index() {} 
    
 	public function get_data(){ 
 		   $sql = "SELECT id_mapel, nama_mapel FROM mapel"; 

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
        $sql = "SELECT * FROM mapel WHERE id_mapel = ?";
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
		$sql = "UPDATE mapel SET nama_mapel= ? where id_mapel= ?";
		return $this->db->query($sql, $params);
	}


    public function delete($params){
        $sql = "delete from mapel where id_mapel=".$params;
        return $this->db->query($sql, $params);
    }
}
