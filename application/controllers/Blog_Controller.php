<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_Controller extends CI_Controller
{

	public function add_blog($ID = null)
	{
		$data = array();
		$data['blog_heading'] = "";
        $data['blog_img'] = "";
        $data['blog_date'] = "";
        $data['blog_subHeading'] = "";
        $data['blog_text'] = "";
        $data['blog_devLink'] = "";
        $data['blog_devIcon'] = "";
        $data['blog_develop'] = "";
        $data['blog_marLink'] = "";
        $data['blog_mark'] = "";
        $data['blog_rmoreLink'] = "";
        $data['blog_rmoreIcon'] = "";
        $data['blog_rmore'] = "";
        

        if ($ID) {
            $r = $this->db->query("select * FROM tbl_blog where blog_id = $ID ");
            $user = $r->row();
            $data['blog_heading'] = $user->blog_heading;
            $data['blog_img'] = $user->blog_img;
            $data['old_img'] = $user->blog_img;

            $data['blog_date'] = $user->blog_date;
            $data['blog_subHeading'] = $user->blog_subHeading;
            $data['blog_text'] = $user->blog_text;
            $data['blog_devLink'] = $user->blog_devLink;
            $data['blog_devIcon'] = $user->blog_devIcon;
            $data['blog_develop'] = $user->blog_develop;
            $data['blog_marLink'] = $user->blog_marLink;
            $data['blog_mark'] = $user->blog_mark;
            $data['blog_rmoreLink'] = $user->blog_rmoreLink;
            $data['blog_rmoreIcon'] = $user->blog_rmoreIcon;
            $data['blog_rmore'] = $user->blog_rmore;
        }
        $this->form_validation->set_rules('blog_heading', 'Student Name', 'required');
        if (empty($_FILES['blog_img']['name'])) {
            $this->form_validation->set_rules('blog_img', 'Logo', 'required');
        }
        $this->form_validation->set_rules('blog_date', 'Fathar Name', 'required');
        $this->form_validation->set_rules('blog_subHeading', 'Mother Name', 'required');
        $this->form_validation->set_rules('blog_text', 'Mother Name', 'required');
        $this->form_validation->set_rules('blog_devLink', 'Mother Name', 'required');
        $this->form_validation->set_rules('blog_devIcon', 'Mother Name', 'required');
        $this->form_validation->set_rules('blog_develop', 'Mother Name', 'required');
        $this->form_validation->set_rules('blog_marLink', 'Mother Name', 'required');
        $this->form_validation->set_rules('blog_mark', 'Mother Name', 'required');
        $this->form_validation->set_rules('blog_rmoreLink', 'Mother Name', 'required');
        $this->form_validation->set_rules('blog_rmoreIcon', 'Mother Name', 'required');
        $this->form_validation->set_rules('blog_rmore', 'Mother Name', 'required');
        if ($this->form_validation->run() == true) {
            $idata['blog_heading'] = $this->input->post('blog_heading');
            // $idata['blog_img'] = $this->input->post('blog_img');
            $config['upload_path']          = 'back-end/uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('blog_img'))
            {
                   $this->upload->display_errors();
            }
            else
            {
                    $sdata = $this->upload->data();
                    @unlink(FCPATH.'/back-end/uploads/'.$data['blog_img']);
                    
                    $idata['blog_img'] = $sdata['file_name'];
            }

            $idata['blog_date'] = $this->input->post('blog_date');
            $idata['blog_subHeading'] = $this->input->post('blog_subHeading');
            $idata['blog_text'] = $this->input->post('blog_text');
            $idata['blog_devLink'] = $this->input->post('blog_devLink');
            $idata['blog_devIcon'] = $this->input->post('blog_devIcon');
            $idata['blog_develop'] = $this->input->post('blog_develop');
            $idata['blog_marLink'] = $this->input->post('blog_marLink');
            $idata['blog_mark'] = $this->input->post('blog_mark');
            $idata['blog_rmoreLink'] = $this->input->post('blog_rmoreLink');
            $idata['blog_rmoreIcon'] = $this->input->post('blog_rmoreIcon');
            $idata['blog_rmore'] = $this->input->post('blog_rmore');
            // $idata['cta_img'] = $this->input->post('cta_img');
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
                $flmg =    $this->db->update('tbl_blog', $idata, array('blog_id' => $ID));
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully updated... !!';
		            $this->session->set_userdata($sdata);
                    redirect("listBlog");
                }
            } else {
                $flmg = $this->db->insert('tbl_blog', $idata);
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully Added... !!';
		            $this->session->set_userdata($sdata);
                    // redirect("test/edit_update_student_list/");
                }
            }
        }
		$data['admin_content'] = $this->load->view('pages/Blog/add_blog', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function list_blog()
	{
		$data = array();
       	$data['all_blog_info'] = $this->Blog_model->all_blog_info();
		$data['admin_content'] = $this->load->view('pages/Blog/list_blog', $data, true);
		$this->load->view('dashboard', $data);
	}


	public function delete_blog($user_id)
	{
		$sdata = array();
		$this->Blog_model->delete_blog_by_id($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('Blog_Controller/list_blog');
	}

	

}
