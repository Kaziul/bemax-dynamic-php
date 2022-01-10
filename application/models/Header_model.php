<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Header_model extends CI_Model
{
   
    public function all_header_info()
	{
		$q = $this->db->query('select * FROM tbl_header ');
		$data = $q->result_array();
        return $data;
        
	}

    public function delete_header_by_id($user_id){
         $this->db->delete('tbl_header', array('header_id' => $user_id));
    }
    



}
