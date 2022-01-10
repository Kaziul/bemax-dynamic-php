<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clients_model extends CI_Model
{



  
  
    public function all_clients_info_from_db()
	{
		$q = $this->db->query('select * FROM tbl_client ');
		$data = $q->result_array();
        return $data;
        
	}

    public function delete_clients_by_id($user_id){
         $this->db->delete('tbl_client', array('client_id' => $user_id));
    }
    



}
