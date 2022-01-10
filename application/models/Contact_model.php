<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_model extends CI_Model
{
  

    public function all_contact_info()
	{
		$q = $this->db->query('select * FROM tbl_contacts ');
		$data = $q->result_array();
        return $data;
        
	}

    public function delete_contact_by_id($user_id){
         $this->db->delete('tbl_contacts', array('contact_id' => $user_id));
    }
    



}
