<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

// print("<pre>".print_r($_POST,true)."</pre>"); exit;
	public function admin_login()
	{
		$email_address = $this->input->post('email_address', true);
		$password = $this->input->post('password', true);
		$this->load->model('admin_model');
		$result = $this->admin_model->admin_model_info($email_address, $password);
		$sdata = array();
		if ($result) {
			$sdata['admin_id'] = $result->$admin_id;
			$sdata['admin_name'] = $result->$admin_name;
			$this->session->set_userdata($sdata);
			redirect('dashboard');
		} else {
			$sdata['messeage'] = 'Your email or password invalid';
			$this->session->set_userdata($sdata);
			redirect(base_url());
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_name');
		$sdata['messeage'] = 'Logout Successfully';
		$this->session->set_userdata($sdata);
		redirect(base_url());
	}
	public function add_student($ID = null)
	{

		$data = array();
		// print("<pre>".print_r($data,true)."</pre>"); exit;
		$data['heading_sml'] = "";
        $data['heading_big'] = "";
        $data['btn_txt'] = "";
        $data['btn_link'] = "";
        $data['slider_image'] = "";

        if ($ID) {
            $r = $this->db->query("select * FROM tbl_slider_area where slider_id = $ID ");
            $user = $r->row();

            // $data['bemaxitems_id'] = $user->bemaxitems_id;
            $data['heading_sml'] = $user->heading_sml;
            $data['heading_big'] = $user->heading_big;
            $data['btn_txt'] = $user->btn_txt;
            $data['btn_link'] = $user->btn_link;
            $data['slider_image'] = $user->slider_image;
            $data['old_image'] = $user->slider_image;
        }

        $this->form_validation->set_rules('heading_sml', ' Heading Small', 'trim|required');
        $this->form_validation->set_rules('heading_big', ' Big Heading', 'trim|required');
        $this->form_validation->set_rules('btn_txt', ' Sub Heading', 'trim|required');
        $this->form_validation->set_rules('btn_link', 'Button Text', 'trim|required');
		if (empty($_FILES['slider_image']['name'])) {
            $this->form_validation->set_rules('slider_image', 'Image', 'required');
        }
        if ($this->form_validation->run() == true) {
            $idata['heading_sml'] = $this->input->post('heading_sml');
            $idata['heading_big'] = $this->input->post('heading_big');
            $idata['btn_txt'] = $this->input->post('btn_txt');
            $idata['btn_link'] = $this->input->post('btn_link');

			$config['upload_path']          = 'back-end/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
	
			if ( ! $this->upload->do_upload('slider_image'))
			{
				   $this->upload->display_errors();
			}
			else
			{
					$sdata = $this->upload->data();
					@unlink(FCPATH.'/back-end/uploads/'.$data['slider_image']);
					$idata['slider_image'] = $sdata['file_name'];
			}

            if ($ID) {
                $suc = $this->db->update('tbl_slider_area', $idata, array('slider_id' => $ID));
                if ($suc) {
                    $sdata['messeage'] = 'updated successfully !!';
                    $this->session->set_userdata($sdata);
					redirect('listSlider');
                }
            } else {
                $suc = $this->db->insert('tbl_slider_area', $idata);
                if ($suc) {
                    $sdata['messeage'] = 'Insert successfully !!';
                    $this->session->set_userdata($sdata);
                }
            }
        }
		
		
		$data['admin_content'] = $this->load->view('pages/add_slider', $data, true);
		$this->load->view('dashboard', $data);
	}

	public function dashboard()
	{
		$data = array();
		$data['admin_content'] = $this->load->view('pages/admin_index', '', true);
		$this->load->view('dashboard', $data);
	}

	// ########################### Add Student #####################################

	
	public function manage_student()
	{
		$data = array();
		$data['all_student_info'] = $this->admin_model->all_student_info();
		$data['admin_content'] = $this->load->view('pages/manage_student', $data, true);
		$this->load->view('dashboard', $data);
	}

	

	
	public function delete_student($user_id)
	{
		$sdata = array();
		$this->admin_model->delete_student_by_id($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('listSlider');
	}

	// ########################## hire us ################### 

	public function hire_us($ID = null)
	{
		$data = array();
		// print("<pre>".print_r($data,true)."</pre>"); exit;
		$data['side_txt'] = "";
        $data['hireUs_btn_txt'] = "";
        $data['hireUs_btn_link'] = "";

        if ($ID) {
            $r = $this->db->query("select * FROM hire_us where hire_us_id = $ID ");
            $user = $r->row();

            // $data['bemaxitems_id'] = $user->bemaxitems_id;
            $data['side_txt'] = $user->side_txt;
            $data['hireUs_btn_txt'] = $user->hireUs_btn_txt;
            $data['hireUs_btn_link'] = $user->hireUs_btn_link;
        }

        $this->form_validation->set_rules('side_txt', ' Side Text', 'trim|required');
        $this->form_validation->set_rules('hireUs_btn_txt', ' Button Text', 'trim|required');
        $this->form_validation->set_rules('hireUs_btn_link', ' Button Link', 'trim|required');
        if ($this->form_validation->run() == true) {
            $idata['side_txt'] = $this->input->post('side_txt');
            $idata['hireUs_btn_txt'] = $this->input->post('hireUs_btn_txt');
            $idata['hireUs_btn_link'] = $this->input->post('hireUs_btn_link');
            

            if ($ID) {
                $suc = $this->db->update('hire_us', $idata, array('hire_us_id' => $ID));
                if ($suc) {
                    $sdata['messeage'] = 'updated successfully !!';
                    $this->session->set_userdata($sdata);
					redirect('hire-us-list');
                }
            } else {
                $suc = $this->db->insert('hire_us', $idata);
                if ($suc) {
                    $sdata['messeage'] = 'Insert successfully !!';
                    $this->session->set_userdata($sdata);
                }
            }
        }
		
		
		$data['admin_content'] = $this->load->view('pages/hire_us', $data, true);
		$this->load->view('dashboard', $data);
		
	}

	public function hire_us_list()
	{
		$data = array();
		$data['all_student_info'] = $this->admin_model->all_hire_us_info();
		$data['admin_content'] = $this->load->view('pages/hire_us_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function delete_hireUs($user_id)
	{
		$sdata = array();
		$this->admin_model->delete_hireUs_by_id($user_id);
		$sdata['messeage'] = 'Hire Us Data delete successfully !!';
		$this->session->set_userdata($sdata);
		redirect('hire-us-list');
	}
}
