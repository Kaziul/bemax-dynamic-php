<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LatestProject extends CI_Controller
{

	// print("<pre>".print_r($_POST,true)."</pre>"); exit;

	public function add_latestProject($ID=null)
	{
		$data = array();
		$data['latestProject_heading'] = "";
        $data['latestProject_img'] = "";
        $data['latestProject_subHeading'] = "";
        $data['latestProject_link'] = "";
        $data['latestProject_text'] = "";

        if ($ID) {
            $r = $this->db->query("select * FROM tbl_latestproject where latestProject_id = $ID ");
            $user = $r->row();

            // $data['bemaxitems_id'] = $user->bemaxitems_id;
            $data['latestProject_heading'] = $user->latestProject_heading;
            $data['old_img'] = $user->latestProject_img;
            $data['latestProject_img'] = $user->latestProject_img;
            $data['latestProject_subHeading'] = $user->latestProject_subHeading;
            $data['latestProject_link'] = $user->latestProject_link;
            $data['latestProject_text'] = $user->latestProject_text;
        }

        $this->form_validation->set_rules('latestProject_heading', 'Latest Project Heading', 'trim|required');
        // $this->form_validation->set_rules('latestProject_img', 'Latest Project Image', 'trim|required');
        if (empty($_FILES['latestProject_img']['name'])) {
            $this->form_validation->set_rules('latestProject_img', 'Image', 'required');
        }
        $this->form_validation->set_rules('latestProject_subHeading', 'Latest Project Sub Heading', 'trim|required');
        $this->form_validation->set_rules('latestProject_link', 'Latest Project Link', 'trim|required');
        $this->form_validation->set_rules('latestProject_text', 'Latest Project Text', 'trim|required');
        if ($this->form_validation->run() == true) {
            $idata['latestProject_heading'] = $this->input->post('latestProject_heading');
            
       
                $config['upload_path']          = 'back-end/uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $this->load->library('upload', $config);
    
                if (!$this->upload->do_upload('latestProject_img')) {
                    $this->upload->display_errors();
                } else {
                    $sdata = $this->upload->data();
                    @unlink(FCPATH.'/back-end/uploads/'.$data['latestProject_img']);
                    $idata['latestProject_img'] = $sdata['file_name'];
                }
        
           
            $idata['latestProject_subHeading'] = $this->input->post('latestProject_subHeading');
            $idata['latestProject_link'] = $this->input->post('latestProject_link');
            $idata['latestProject_text'] = $this->input->post('latestProject_text');
            if ($ID) {
              $suc = $this->db->update('tbl_latestproject', $idata, array('latestProject_id' => $ID));
                if($suc){
                    $sdata['messeage'] = 'Data successfully update.. !!';
		            $this->session->set_userdata($sdata);
                    redirect('listProject');
                }
            } else {
               $suc = $this->db->insert('tbl_latestproject', $idata);
               if($suc){
                $sdata['messeage'] = ' Data successfully added.. !!';
                $this->session->set_userdata($sdata);
                
            }
            }
        }
		$data['admin_content'] = $this->load->view('pages/LatestProject/add_latest_project', $data, true);
		$this->load->view('dashboard', $data);
	}

	public function save_latestProject()
	{
		$this->latestProject_model->bemaxitems_model_info();
		redirect('addProject');
	}

	public function list_latestProject()
	{
		$data = array();
		$data['bemaxitems_list_from_db'] = $this->latestProject_model->bemaxitems_list_from_db();
		$data['admin_content'] = $this->load->view('pages/LatestProject/list_latest_project', $data, true);
		$this->load->view('dashboard', $data);
	}

	public function delete_student($user_id)
	{
		$suc = $this->db->delete('tbl_latestproject', array('latestProject_id' => $user_id));
		if ($suc) {
			$sdata['messeage'] = 'Data successfully  Delete.. !!';
			$this->session->set_userdata($sdata);
			redirect('listProject');
		}
	}
}
