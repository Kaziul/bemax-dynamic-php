<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chooseUs_model extends CI_Model {


    // public function save_chooseUs_info($ID=null){
    //     $data['chooseUs_heading'] = "";
    //     $data['chooseUs_img'] = "";
    //     $data['choseUs_vIcon'] = "";
    //     $data['chooseUs_imglink'] = "";
    //     $data['chooseUs_icon'] = "";
    //     $data['chooseUs_subHeading'] = "";
    //     $data['chooseUs_subHLink'] = "";
    //     $data['chooseUs_text'] = "";
    //     if ($ID) {
    //         $r = $this->db->query("select * FROM tbl_chooseus where chooseUs_id = $ID ");
    //         $user = $r->row();

    //         // $data['bemaxitems_id'] = $user->bemaxitems_id;
    //         $data['chooseUs_heading'] = $user->chooseUs_heading;
    //         $data['chooseUs_img'] = $user->chooseUs_img;
    //         $data['chooseUs_imglink'] = $user->chooseUs_imglink;
    //         $data['choseUs_vIcon'] = $user->choseUs_vIcon;
    //         $data['chooseUs_icon'] = $user->chooseUs_icon;
    //         $data['chooseUs_subHeading'] = $user->chooseUs_subHeading;
    //         $data['chooseUs_subHLink'] = $user->chooseUs_subHLink;
    //         $data['chooseUs_text'] = $user->chooseUs_text;
    //     }

    //     $this->form_validation->set_rules('chooseUs_heading', 'Latest Project Heading', 'trim|required');
    //     if (empty($_FILES['chooseUs_img']['name'])) {
    //         $this->form_validation->set_rules('chooseUs_img', 'Image', 'required');
    //     }
    //     $this->form_validation->set_rules('chooseUs_imglink', 'Latest Project Link', 'trim|required');
    //     $this->form_validation->set_rules('choseUs_vIcon', 'Latest Project Icon', 'trim|required');
    //     $this->form_validation->set_rules('chooseUs_icon', 'Latest Project Text', 'trim|required');
    //     $this->form_validation->set_rules('chooseUs_subHeading', 'Latest Project Text', 'trim|required');
    //     $this->form_validation->set_rules('chooseUs_subHLink', 'Latest Project Text', 'trim|required');
    //     $this->form_validation->set_rules('chooseUs_text', 'Latest Project Text', 'trim|required');
    //     if ($this->form_validation->run() == true) {
    //         $idata['chooseUs_heading'] = $this->input->post('chooseUs_heading');
    //         // $idata['chooseUs_img'] = $this->input->post('chooseUs_img');

    //         $config['upload_path']          = 'back-end/uploads/';
    //             $config['allowed_types']        = 'gif|jpg|png|jpeg';
    //             $this->load->library('upload', $config);
    
    //             if (!$this->upload->do_upload('chooseUs_img')) {
    //                 $this->upload->display_errors();
    //             } else {
    //                 $sdata = $this->upload->data();
    //                 $idata['chooseUs_img'] = $config['upload_path'] . $sdata['file_name'];
    //             }

    //         $idata['chooseUs_imglink'] = $this->input->post('chooseUs_imglink');
    //         $idata['choseUs_vIcon'] = $this->input->post('choseUs_vIcon');
    //         $idata['chooseUs_icon'] = $this->input->post('chooseUs_icon');
    //         $idata['chooseUs_subHeading'] = $this->input->post('chooseUs_subHeading');
    //         $idata['chooseUs_subHLink'] = $this->input->post('chooseUs_subHLink');
    //         $idata['chooseUs_text'] = $this->input->post('chooseUs_text');
    //         if ($ID) {
    //             $suc = $this->db->update('tbl_chooseus', $idata, array('chooseUs_id' => $ID));
    //               if($suc){
    //                   $sdata['messeage'] = 'Data successfully update.. !!';
    //                   $this->session->set_userdata($sdata);
    //               }
    //           } else {
    //            $suc = $this->db->insert('tbl_chooseus', $idata);
    //            if($suc){
    //             $sdata['messeage'] = ' Data successfully added.. !!';
    //             $this->session->set_userdata($sdata);
    //         }
    //     }
    //     }
    //     return $data;
    // }

    public function all_chooseUs_info()
	{
		$q = $this->db->query('select * FROM tbl_chooseus ');
		$data = $q->result_array();
        return $data;
        
	}

    public function delete_student_by_id($user_id){
        $suc = $this->db->delete('tbl_slider_area', array('slider_id' => $user_id));

			if ($suc) {
				$this->session->set_flashdata('success', 'Data Successfully Delete...');
				// redirect("test/stu_list/");
			}

    }


}
