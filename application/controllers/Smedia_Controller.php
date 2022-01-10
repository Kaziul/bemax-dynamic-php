<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Smedia_Controller extends CI_Controller
{

    // print("<pre>".print_r($_POST,true)."</pre>"); exit;

    public function add_Smedia($ID = null)
    {
        $data = array();
        $data['smedia_logolink'] = "";
        $data['smedia_logo'] = "";
        $data['smedia_text'] = "";
        $data['smedia_fblink'] = "";
        $data['smedia_fbicon'] = "";
        $data['smedia_twlink'] = "";
        $data['smedia_twicon'] = "";
        $data['smedia_golink'] = "";
        $data['smedia_goicon'] = "";
        $data['smedia_ldlink'] = "";
        $data['smedia_ldicon'] = "";

        if ($ID) {
            $r = $this->db->query("select * FROM tbl_smedia where smedia_id = $ID ");
            $user = $r->row();
            // print("<pre>".print_r($user,true)."</pre>"); exit;
            $data['smedia_logolink'] = $user->smedia_logolink;
            $data['old_img'] = $user->smedia_logo;
            $data['smedia_logo'] = $user->smedia_logo;
            $data['smedia_text'] = $user->smedia_text;
            $data['smedia_fblink'] = $user->smedia_fblink;
            $data['smedia_fbicon'] = $user->smedia_fbicon;
            $data['smedia_twlink'] = $user->smedia_twlink;
            $data['smedia_twicon'] = $user->smedia_twicon;
            $data['smedia_golink'] = $user->smedia_golink;
            $data['smedia_goicon'] = $user->smedia_goicon;
            $data['smedia_ldlink'] = $user->smedia_ldlink;
            $data['smedia_ldicon'] = $user->smedia_ldicon;
        }
        $this->form_validation->set_rules('smedia_logolink', 'Media Link', 'required');
        // $this->form_validation->set_rules('smedia_logo', 'Media Logo', 'required');
        if (empty($_FILES['smedia_logo']['name'])) {
            $this->form_validation->set_rules('smedia_logo', 'Logo', 'required');
        }
        $this->form_validation->set_rules('smedia_text', 'Media Text', 'required');
        $this->form_validation->set_rules('smedia_fblink', 'facebook Link', 'required');
        $this->form_validation->set_rules('smedia_fbicon', 'Facebook Icon', 'required');
        $this->form_validation->set_rules('smedia_twlink', 'Twitter Link', 'required');
        $this->form_validation->set_rules('smedia_twicon', 'Twitter icon', 'required');
        $this->form_validation->set_rules('smedia_golink', 'Google Link', 'required');
        $this->form_validation->set_rules('smedia_goicon', 'Google Icon', 'required');
        $this->form_validation->set_rules('smedia_ldlink', 'linkedin Link', 'required');
        $this->form_validation->set_rules('smedia_ldicon', 'linkedin Icon', 'required');
        if ($this->form_validation->run() == true) {
            $idata['smedia_logolink'] = $this->input->post('smedia_logolink');
            // $idata['smedia_logo'] = $this->input->post('smedia_logo');

            $config['upload_path']          = 'back-end/uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('smedia_logo')) {
                $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
				@unlink(FCPATH.'/back-end/uploads/'.$data['smedia_logo']);

                $idata['smedia_logo'] =$sdata['file_name'];
            }

            $idata['smedia_text'] = $this->input->post('smedia_text');
            $idata['smedia_fblink'] = $this->input->post('smedia_fblink');
            $idata['smedia_fbicon'] = $this->input->post('smedia_fbicon');
            $idata['smedia_twlink'] = $this->input->post('smedia_twlink');
            $idata['smedia_twicon'] = $this->input->post('smedia_twicon');
            $idata['smedia_golink'] = $this->input->post('smedia_golink');
            $idata['smedia_goicon'] = $this->input->post('smedia_goicon');
            $idata['smedia_ldlink'] = $this->input->post('smedia_ldlink');
            $idata['smedia_ldicon'] = $this->input->post('smedia_ldicon');

            if ($ID) {
                $flmg =    $this->db->update('tbl_smedia', $idata, array('smedia_id' => $ID));
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully updated... !!';
                    $this->session->set_userdata($sdata);
                    redirect("listMidia");
                }
            } else {
                $flmg = $this->db->insert('tbl_smedia', $idata);
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully Added... !!';
                    $this->session->set_userdata($sdata);
                    // redirect("test/edit_update_student_list/");
                }
            }
        }
        $data['admin_content'] = $this->load->view('pages/Smedia/add_Smedia', $data, true);
        $this->load->view('dashboard', $data);
    }
    public function list_media()
    {
        $data = array();
        $data['all_media_info'] = $this->Smedia_model->all_media_info();
        $data['admin_content'] = $this->load->view('pages/Smedia/list_Smedia', $data, true);
        $this->load->view('dashboard', $data);
    }


    public function delete_media($user_id)
    {
        $sdata = array();
        $this->Smedia_model->delete_media_by_id($user_id);
        $sdata['messeage'] = 'Data successfully Delete..!!';
        $this->session->set_userdata($sdata);
        redirect('listMidia');
    }
}
