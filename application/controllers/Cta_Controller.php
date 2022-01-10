<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cta_Controller extends CI_Controller
{

	// print("<pre>".print_r($_POST,true)."</pre>"); exit;

	public function add_cta($ID = null)
	{
		$data = array();
		$data['cta_heading'] = "";
        $data['cta_text'] = "";
        $data['cta_textLink'] = "";
        $data['cta_linkText'] = "";
        $data['cta_img'] = "";

        if ($ID) {
            $r = $this->db->query("select * FROM tbl_cta where cta_id = $ID ");
            $user = $r->row();
            $data['cta_heading'] = $user->cta_heading;
            $data['cta_text'] = $user->cta_text;
            $data['cta_textLink'] = $user->cta_textLink;
            $data['cta_linkText'] = $user->cta_linkText;
            $data['cta_img'] = $user->cta_img;
            $data['old_img'] = $user->cta_img;
        }
        $this->form_validation->set_rules('cta_heading', 'Student Name', 'required');
        $this->form_validation->set_rules('cta_text', 'Student Roll', 'required');
        $this->form_validation->set_rules('cta_textLink', 'Fathar Name', 'required');
        $this->form_validation->set_rules('cta_linkText', 'Mother Name', 'required');
        if (empty($_FILES['cta_img']['name'])) {
            $this->form_validation->set_rules('cta_img', 'Logo', 'required');
        }
        if ($this->form_validation->run() == true) {
            $idata['cta_heading'] = $this->input->post('cta_heading');
            $idata['cta_text'] = $this->input->post('cta_text');
            $idata['cta_textLink'] = $this->input->post('cta_textLink');
            $idata['cta_linkText'] = $this->input->post('cta_linkText');
            // $idata['cta_img'] = $this->input->post('cta_img');
            $config['upload_path']          = 'back-end/uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('cta_img'))
            {
                   $this->upload->display_errors();
            }
            else
            {
                    $sdata = $this->upload->data();
                    @unlink(FCPATH.'/back-end/uploads/'.$data['cta_img']);

                    $idata['cta_img'] = $sdata['file_name'];
            }
            if ($ID) {
                $flmg =    $this->db->update('tbl_cta', $idata, array('cta_id' => $ID));
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully updated... !!';
		            $this->session->set_userdata($sdata);
                    redirect("update");
                }
            } else {
                $flmg = $this->db->insert('tbl_cta', $idata);
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully Added... !!';
		            $this->session->set_userdata($sdata);
                    // redirect("test/edit_update_student_list/");
                }
            }
        }
		$data['admin_content'] = $this->load->view('pages/CTA/add_cta', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function list_cta()
	{
		$data = array();
       	$data['all_cta_info'] = $this->Cta_model->all_cta_info();
		$data['admin_content'] = $this->load->view('pages/CTA/list_cta', $data, true);
		$this->load->view('dashboard', $data);
	}


	public function delete_cta($user_id)
	{
		$sdata = array();
		$this->Cta_model->delete_cta_by_id($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('listCTA');
	}

	

}
