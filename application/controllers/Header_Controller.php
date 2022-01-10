<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Header_Controller extends CI_Controller
{

// print("<pre>".print_r($_POST,true)."</pre>"); exit;
	

	public function add_header($ID=null)
	{
		$data = array();
        // $ra = $this->db->query("select * FROM tbl_header ");
        // $user = $ra->row();

		$data['logo'] = "";
        // print("<pre>".print_r($data['header_logo'],true)."</pre>"); exit;

		$data['header_logo'] = "";
        $data['header_home'] = "";
        $data['header_features'] = "";
        $data['header_pages'] = "";
        $data['header_portfolio'] = "";
        $data['header_blog'] = "";
        $data['header_contact'] = "";
   
        if ($ID) {
            $r = $this->db->query("select * FROM tbl_header where header_id = $ID ");
            $user = $r->row();
            $data['logo'] = $user->header_logo;
            // $data['bemaxitems_id'] = $user->bemaxitems_id;
            $data['header_logo'] = $user->header_logo;
            $data['header_home'] = $user->header_home;
            $data['header_features'] = $user->header_features;
            $data['header_pages'] = $user->header_pages;
            $data['header_portfolio'] = $user->header_portfolio;
            $data['header_blog'] = $user->header_blog;
            $data['header_contact'] = $user->header_contact;
          
        }

       
        if (empty($_FILES['header_logo']['name'])) {
            $this->form_validation->set_rules('header_logo', 'Image', 'required');
        }
        $this->form_validation->set_rules('header_home', 'Header Home', 'trim|required');
        $this->form_validation->set_rules('header_features', 'Header Features', 'trim|required');
        $this->form_validation->set_rules('header_pages', 'Header Pages', 'trim|required');
        $this->form_validation->set_rules('header_portfolio', 'Header Portfolio', 'trim|required');
        $this->form_validation->set_rules('header_blog', 'Header Blog', 'trim|required');
        $this->form_validation->set_rules('header_contact', 'header Contact', 'trim|required');
        if ($this->form_validation->run() == true) {

            $config['upload_path']          = 'back-end/uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $this->load->library('upload', $config);
    
                if (!$this->upload->do_upload('header_logo')) {
                    $this->upload->display_errors();
                } else {
                    $sdata = $this->upload->data();
                    // 
                    // print("<pre>".print_r($sdata,true)."</pre>"); exit;
                    // @unlink("back-end/uploads/".$_POST['header_logo']);
                    // $r = $this->db->query("select * FROM tbl_header where header_id = $ID ");
                    // $user = $r->row();
                    // unlink(FCPATH.'/back-end/uploads/'.$user->header_logo);
                    unlink(FCPATH.'/back-end/uploads/'. $data['header_logo']);
                  
                    $idata['header_logo'] = $sdata['file_name'];

                    
                   
                }

            $idata['header_home'] = $this->input->post('header_home');
            $idata['header_features'] = $this->input->post('header_features');
            $idata['header_pages'] = $this->input->post('header_pages');
            $idata['header_portfolio'] = $this->input->post('header_portfolio');
            $idata['header_blog'] = $this->input->post('header_blog');
            $idata['header_contact'] = $this->input->post('header_contact');
            if ($ID) {
                $suc = $this->db->update('tbl_header', $idata, array('header_id' => $ID));
                  if($suc){
                      $sdata['messeage'] = 'Data successfully update.. !!';
                      $this->session->set_userdata($sdata);
					  redirect('listHeader');
                  }
              } else {
               $suc = $this->db->insert('tbl_header', $idata);
               if($suc){
                $sdata['messeage'] = ' Data successfully added.. !!';
                $this->session->set_userdata($sdata);
				redirect('addHeader');
            }
        }
        }
		$data['admin_content'] = $this->load->view('pages/Header/add_header', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function list_header()
	{
			$data = array();
			$data['all_header_info'] = $this->Header_model->all_header_info();
			$data['admin_content'] = $this->load->view('pages/Header/list_header', $data, true);
			$this->load->view('dashboard', $data);
		
	}

	public function delete_header($user_id)
	{
		$sdata = array();
		$this->Header_model->delete_header_by_id($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
        redirect('listHeader');

	}
}
