<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Iconbox_model extends CI_Model
{


        public function iconbox_model_info()
        {
                $config['upload_path']          = 'back-end/uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('iconbox_img')) {
                        $this->upload->display_errors();
                } else {
                        $sdata = $this->upload->data();
                        $data['iconbox_img'] = $sdata['file_name'];
                }

                $data['iconbox_icon'] = $this->input->post('iconbox_icon', true);
                $data['iconbox_Htext'] = $this->input->post('iconbox_Htext', true);
                $data['iconbox_Ptext'] = $this->input->post('iconbox_Ptext', true);
                $data['iconbox_Picon'] = $this->input->post('iconbox_Picon', true);
                $data['iconbox_Ptxt'] = $this->input->post('iconbox_Ptxt', true);


                $this->db->insert('tbl_iconbox', $data);
        }

        public function iconbox_list_info()
        {
                $q = $this->db->query('select * FROM tbl_iconbox ');
	

                $data = $q->result_array();
                // print("<pre>".print_r($data,true)."</pre>"); exit;
                return $data;
        }


        public function iconbox_info_by_id($iconbox_id)
        {

                $r = $this->db->query("select * FROM tbl_iconbox where iconbox_id = $iconbox_id ");
                $user = $r->row();


                return $user;
        }

        public function delete_iconbox_by_id($iconbox_id)
        {
                $suc = $this->db->delete('tbl_iconbox', array('iconbox_id' => $iconbox_id));

                if ($suc) {
                        $this->session->set_flashdata('success', 'Data Successfully Delete...');
                        // redirect("test/stu_list/");
                }
        }


        public function update_iconbox_info($iconbox_id=null){
                $data = array();
                $iconbox_id=$this->input->post('iconbox_id',true);
                $data['iconbox_icon'] = $this->input->post('iconbox_icon', true);
                $data['iconbox_Htext'] = $this->input->post('iconbox_Htext', true);
                $data['iconbox_Ptext'] = $this->input->post('iconbox_Ptext', true);
                $data['iconbox_Picon'] = $this->input->post('iconbox_Picon', true);
                $data['iconbox_Ptxt'] = $this->input->post('iconbox_Ptxt', true);
               $this->db->update('tbl_iconbox', $data, array('iconbox_id' => $iconbox_id));
                                                
            }
}
