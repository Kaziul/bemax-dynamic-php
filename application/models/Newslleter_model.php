<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Newslleter_model extends CI_Model
{
  

    public function all_newslleter_info()
	{
		$q = $this->db->query('select * FROM tbl_newslleter ');
		$data = $q->result_array();
        return $data;
        
	}

    public function delete_newslleter_by_id($user_id){
         $this->db->delete('tbl_newslleter', array('newslleter_id' => $user_id));
    }
    



}
