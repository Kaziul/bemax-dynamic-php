<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feature_Controller extends CI_Controller
{

	// print("<pre>".print_r($_POST,true)."</pre>"); exit;

	public function add_feature($ID = null)
	{
		$data = array();
		$data['feature_heading'] = "";
        $data['feature_about'] = "";
        $data['feature_aLink'] = "";
        $data['feature_story'] = "";
        $data['feature_sLink'] = "";
        $data['feature_Conditon'] = "";
        $data['feature_cLink'] = "";
        $data['feature_policy'] = "";
        $data['feature_pLink'] = "";
        $data['feature_map'] = "";
        $data['feature_mLink'] = "";

        if ($ID) {
            $r = $this->db->query("select * FROM tbl_features where feature_id = $ID ");
            $user = $r->row();
            $data['feature_heading'] = $user->feature_heading;
            $data['feature_about'] = $user->feature_about;
            $data['feature_aLink'] = $user->feature_aLink;
            $data['feature_story'] = $user->feature_story;
            $data['feature_sLink'] = $user->feature_sLink;
            $data['feature_Conditon'] = $user->feature_Conditon;
            $data['feature_cLink'] = $user->feature_cLink;
            $data['feature_policy'] = $user->feature_policy;
            $data['feature_pLink'] = $user->feature_pLink;
            $data['feature_map'] = $user->feature_map;
            $data['feature_mLink'] = $user->feature_mLink;
        }
        $this->form_validation->set_rules('feature_heading', 'Feature Heading', 'required');
        $this->form_validation->set_rules('feature_about', 'Feature About', 'required');
        $this->form_validation->set_rules('feature_aLink', 'About Link', 'required');
        $this->form_validation->set_rules('feature_story', 'Feature Story', 'required');
        $this->form_validation->set_rules('feature_sLink', 'Story Link', 'required');
        $this->form_validation->set_rules('feature_Conditon', 'Feature Condition', 'required');
        $this->form_validation->set_rules('feature_cLink', 'Condition Link', 'required');
        $this->form_validation->set_rules('feature_policy', 'Feature Policy ', 'required');
        $this->form_validation->set_rules('feature_pLink', 'Policy Link', 'required');
        $this->form_validation->set_rules('feature_map', 'Feature Map', 'required');
        $this->form_validation->set_rules('feature_mLink', 'Map Link', 'required');
        if ($this->form_validation->run() == true) {
            $idata['feature_heading'] = $this->input->post('feature_heading');
            $idata['feature_about'] = $this->input->post('feature_about');
            $idata['feature_aLink'] = $this->input->post('feature_aLink');
            $idata['feature_story'] = $this->input->post('feature_story');
            $idata['feature_sLink'] = $this->input->post('feature_sLink');
            $idata['feature_Conditon'] = $this->input->post('feature_Conditon');
            $idata['feature_cLink'] = $this->input->post('feature_cLink');
            $idata['feature_policy'] = $this->input->post('feature_policy');
            $idata['feature_pLink'] = $this->input->post('feature_pLink');
            $idata['feature_map'] = $this->input->post('feature_map');
            $idata['feature_mLink'] = $this->input->post('feature_mLink');
          
            // $config['upload_path']          = 'back-end/uploads/';
            // $config['allowed_types']        = 'gif|jpg|png|jpeg';
            // $this->load->library('upload', $config);
    
            // if ( ! $this->upload->do_upload('cta_img'))
            // {
            //        $this->upload->display_errors();
            // }
            // else
            // {
            //         $sdata = $this->upload->data();
            //         $data['cta_img'] = $config['upload_path'].$sdata['file_name'];
            // }



            if ($ID) {
                $flmg =    $this->db->update('tbl_features', $idata, array('feature_id' => $ID));
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully updated... !!';
		            $this->session->set_userdata($sdata);
                    // redirect("update");
                }
            } else {
                $flmg = $this->db->insert('tbl_features', $idata);
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully Added... !!';
		            $this->session->set_userdata($sdata);
                    // redirect("test/edit_update_student_list/");
                }
            }
        }
		$data['admin_content'] = $this->load->view('pages/Features/add_feature', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function list_feature()
	{
		$data = array();
       	$data['all_feature_info'] = $this->Feature_model->all_feature_info();
		$data['admin_content'] = $this->load->view('pages/Features/list_feature', $data, true);
		$this->load->view('dashboard', $data);
	}


	public function delete_feature($user_id)
	{
		$sdata = array();
		$this->Feature_model->delete_media_by_id($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('listMidia');
	}

	

}
