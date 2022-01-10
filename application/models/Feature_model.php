<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feature_model extends CI_Model
{
  

    public function all_feature_info()
	{
		$q = $this->db->query('select * FROM tbl_features ');
		$data = $q->result_array();
        return $data;
        
	}

    public function delete_media_by_id($user_id){
         $this->db->delete('tbl_smedia', array('smedia_id' => $user_id));
    }
    



}
