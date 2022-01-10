<?php
defined('BASEPATH') or exit('No direct script access allowed');

class latestProject_model extends CI_Model
{

  
    public function bemaxitems_list_from_db()
    {
        $q = $this->db->query('select * FROM tbl_latestproject ');
        $data = $q->result_array();
        return $data;
    }


    public function edit_bemaxitems_info_by_id($slider_id)
    {

        $r = $this->db->query("select * FROM tbl_latestproject where latestProject_id = $slider_id ");
        $user = $r->row();
        return $user;
    }
}
