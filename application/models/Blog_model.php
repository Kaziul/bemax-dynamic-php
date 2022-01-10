<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{
  
    public function all_blog_info()
	{
		$q = $this->db->query('select * FROM tbl_blog ');
		$data = $q->result_array();
        return $data;
        
	}

    public function delete_blog_by_id($user_id){
         $this->db->delete('tbl_blog', array('blog_id' => $user_id));
    }
    



}
