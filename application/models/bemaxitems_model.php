<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bemaxitems_model extends CI_Model
{

    public function bemaxitems_model_info($ID = null)
    {
        // $data['bemaxitems_heading'] = "";
        // $data['bemaxitems_icon'] = "";
        // $data['bemaxitems_sub_heading'] = "";
        // $data['bemaxitems_text'] = "";

        // if ($ID) {
        //     $r = $this->db->query("select * FROM tbl_bemaxitems where bemaxitems_id = $ID ");
        //     $user = $r->row();

        //     // $data['bemaxitems_id'] = $user->bemaxitems_id;
        //     $data['bemaxitems_heading'] = $user->bemaxitems_heading;
        //     $data['bemaxitems_icon'] = $user->bemaxitems_icon;
        //     $data['bemaxitems_sub_heading'] = $user->bemaxitems_sub_heading;
        //     $data['bemaxitems_text'] = $user->bemaxitems_text;
        // }

        // $this->form_validation->set_rules('bemaxitems_heading', 'Bemaxitems Heading', 'trim|required');
        // $this->form_validation->set_rules('bemaxitems_icon', 'Bemaxitems Icon', 'trim|required');
        // $this->form_validation->set_rules('bemaxitems_sub_heading', 'Bemaxitems Sub Heading', 'trim|required');
        // $this->form_validation->set_rules('bemaxitems_text', 'Bemaxitems Text', 'trim|required');
        // if ($this->form_validation->run() == true) {
        //     $idata['bemaxitems_heading'] = $this->input->post('bemaxitems_heading');
        //     $idata['bemaxitems_icon'] = $this->input->post('bemaxitems_icon');
        //     $idata['bemaxitems_sub_heading'] = $this->input->post('bemaxitems_sub_heading');
        //     $idata['bemaxitems_text'] = $this->input->post('bemaxitems_text');

        //     if ($ID) {
        //         $suc = $this->db->update('tbl_bemaxitems', $idata, array('bemaxitems_id' => $ID));
        //         if ($suc) {
        //             $sdata['messeage'] = 'updated successfully !!';
        //             $this->session->set_userdata($sdata);
        //         }
        //     } else {
        //         $suc = $this->db->insert('tbl_bemaxitems', $idata);
        //         if ($suc) {
        //             $sdata['messeage'] = 'Insert successfully !!';
        //             $this->session->set_userdata($sdata);
        //         }
        //     }
        // }
        // return $data;
    }

    public function bemaxitems_list_from_db(){
        $q = $this->db->query('select * FROM tbl_bemaxitems ');
		$data = $q->result_array();
        return $data;
    }


    // public function edit_bemaxitems_info_by_id($slider_id){
     
    //     $r = $this->db->query("select * FROM tbl_bemaxitems where bemaxitems_id = $slider_id ");
    //     $user = $r->row();
    //     return $user;
    // }

    public function delete_bemaxitems_by_id($user_id){
        $suc = $this->db->delete('tbl_bemaxitems', array('bemaxitems_id' => $user_id));
        return $suc;
    }



}
