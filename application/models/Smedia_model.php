<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Smedia_model extends CI_Model
{
  

    public function all_media_info()
	{
		$q = $this->db->query('select * FROM tbl_smedia ');
		$data = $q->result_array();
        return $data;
        
	}

    public function delete_media_by_id($user_id){
         $this->db->delete('tbl_smedia', array('smedia_id' => $user_id));
    }
    



}
