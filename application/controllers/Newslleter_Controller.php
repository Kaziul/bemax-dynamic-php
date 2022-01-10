<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Newslleter_Controller extends CI_Controller
{

	// print("<pre>".print_r($_POST,true)."</pre>"); exit;

	public function add_newslleter($ID = null)
	{
		$data = array();
		$data['newslleter_heading'] = "";
        $data['newslleter_text'] = "";
        $data['newslleter_btnText'] = "";
       
        

        if ($ID) {
            $r = $this->db->query("select * FROM tbl_newslleter where newslleter_id = $ID ");
            $user = $r->row();
            $data['newslleter_heading'] = $user->newslleter_heading;
            $data['newslleter_text'] = $user->newslleter_text;
            $data['newslleter_btnText'] = $user->newslleter_btnText;
           
           
        }
        $this->form_validation->set_rules('newslleter_heading', 'Heading', 'required');
        $this->form_validation->set_rules('newslleter_text', 'Text', 'required');
        $this->form_validation->set_rules('newslleter_btnText', 'Button Text', 'required');
        
       
        if ($this->form_validation->run() == true) {
            $idata['newslleter_heading'] = $this->input->post('newslleter_heading');
            $idata['newslleter_text'] = $this->input->post('newslleter_text');
            $idata['newslleter_btnText'] = $this->input->post('newslleter_btnText');
          
          
            

            if ($ID) {
                $flmg =    $this->db->update('tbl_newslleter', $idata, array('newslleter_id' => $ID));
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully updated... !!';
		            $this->session->set_userdata($sdata);
                    redirect("listNewslleter");
                }
            } else {
                $flmg = $this->db->insert('tbl_newslleter', $idata);
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully Added... !!';
		            $this->session->set_userdata($sdata);
                    // redirect("test/edit_update_student_list/");
                }
            }
        }
		$data['admin_content'] = $this->load->view('pages/Newslleter/add_Newslleter', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function list_newslleter()
	{
		$data = array();
       	$data['all_newslleter_info'] = $this->Newslleter_model->all_newslleter_info();
		$data['admin_content'] = $this->load->view('pages/Newslleter/list_Newslleter', $data, true);
		$this->load->view('dashboard', $data);
	}


	public function delete_newslleter($user_id)
	{
		$sdata = array();
		$this->Newslleter_model->delete_newslleter_by_id($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('listNewslleter');
	}

	

}
