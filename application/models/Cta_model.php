<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cta_model extends CI_Model
{
   
    public function all_cta_info()
	{
		$q = $this->db->query('select * FROM tbl_cta ');
		$data = $q->result_array();
        return $data;
        
	}

    public function delete_cta_by_id($user_id){
         $this->db->delete('tbl_cta', array('cta_id' => $user_id));
    }
    



}
