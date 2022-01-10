<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial_Controller extends CI_Controller
{

	// print("<pre>".print_r($_POST,true)."</pre>"); exit;

	public function add_testiomonial($ID = null)
	{
		$data = array();
        $data['testimonial_heading'] = "";
        $data['testimonial_text'] = "";
        $data['testimonial_img'] = "";
        $data['testimonial_mname'] = "";
        $data['testimonial_mlink'] = "";
        $data['testimonial_discr'] = "";
       
        

        if ($ID) {
            $r = $this->db->query("select * FROM tbl_testimonial where testimonial_id = $ID ");
            $user = $r->row();
            $data['testimonial_heading'] = $user->testimonial_heading;
            $data['testimonial_text'] = $user->testimonial_text;
            $data['testimonial_img'] = $user->testimonial_img;
            $data['old_img'] = $user->testimonial_img;
            $data['testimonial_mname'] = $user->testimonial_mname;
            $data['testimonial_mlink'] = $user->testimonial_mlink;
            $data['testimonial_discr'] = $user->testimonial_discr;
        }
        $this->form_validation->set_rules('testimonial_heading', 'Testimonial Heading', 'required');
        $this->form_validation->set_rules('testimonial_text', 'Testimonial Text', 'required');
        // $this->form_validation->set_rules('testimonial_img', 'Mother Name', 'required');
        if (empty($_FILES['testimonial_img']['name'])) {
            $this->form_validation->set_rules('testimonial_img', 'Logo', 'required');
        }
        $this->form_validation->set_rules('testimonial_mname', 'Testimonial Mname', 'required');
        $this->form_validation->set_rules('testimonial_mlink', 'Testimonial Mlink', 'required');
        $this->form_validation->set_rules('testimonial_discr', 'Testimonial Discri', 'required');
    
        if ($this->form_validation->run() == true) {
    
            $idata['testimonial_heading'] = $this->input->post('testimonial_heading');
            $idata['testimonial_text'] = $this->input->post('testimonial_text');
            // $idata['testimonial_img'] = $this->input->post('testimonial_img');

            // $idata['cta_img'] = $this->input->post('cta_img');
            $config['upload_path']          = 'back-end/uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('testimonial_img'))
            {
                   $this->upload->display_errors();
            }
            else
            {
                    $sdata = $this->upload->data();
                    @unlink(FCPATH.'/back-end/uploads/'.$data['testimonial_img']);

                    $idata['testimonial_img'] = $sdata['file_name'];
            }


            $idata['testimonial_mname'] = $this->input->post('testimonial_mname');
            $idata['testimonial_mlink'] = $this->input->post('testimonial_mlink');
            $idata['testimonial_discr'] = $this->input->post('testimonial_discr');
           
            
            if ($ID) {
                $flmg =    $this->db->update('tbl_testimonial', $idata, array('testimonial_id' => $ID));
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully updated... !!';
		            $this->session->set_userdata($sdata);
                    redirect("listTestimonial");
                }
            } else {
                $flmg = $this->db->insert('tbl_testimonial', $idata);
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully Added... !!';
		            $this->session->set_userdata($sdata);
                    // redirect("test/edit_update_student_list/");
                }
            }
        }
		$data['admin_content'] = $this->load->view('pages/Testimonials/add_testimonial', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function list_testiomonials()
	{
		$data = array();
       	$data['all_testiomonial_info'] = $this->Testimonial_model->all_blog_info();
		$data['admin_content'] = $this->load->view('pages/Testimonials/list_testimonial', $data, true);
		$this->load->view('dashboard', $data);
	}


	public function delete_testimonials($user_id)
	{
		$sdata = array();
		$this->Testimonial_model->delete_blog_by_id($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('listTestimonial');
	}

	

}
