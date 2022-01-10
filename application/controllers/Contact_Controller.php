<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_Controller extends CI_Controller
{

    // print("<pre>".print_r($_POST,true)."</pre>"); exit;

    public function add_contact($ID = null)
    {
        $data = array();
        $data['contact_heading'] = "";
        $data['contact_adds'] = "";
        $data['contact_phone'] = "";
        $data['contact_fax'] = "";
        $data['contact_email'] = "";
       

        if ($ID) {
            $r = $this->db->query("select * FROM tbl_contacts where contact_id = $ID ");
            $user = $r->row();
            $data['contact_heading'] = $user->contact_heading;
            $data['contact_adds'] = $user->contact_adds;
            $data['contact_phone'] = $user->contact_phone;
            $data['contact_fax'] = $user->contact_fax;
            $data['contact_email'] = $user->contact_email;
          
        }
      
        $this->form_validation->set_rules('contact_heading', 'Twitter Link', 'required');
        $this->form_validation->set_rules('contact_adds', 'Twitter icon', 'required');
        $this->form_validation->set_rules('contact_phone', 'Google Link', 'required');
        $this->form_validation->set_rules('contact_fax', 'Google Icon', 'required');
        $this->form_validation->set_rules('contact_email', 'linkedin Link', 'required');
       
        if ($this->form_validation->run() == true) {
          
           
            $idata['contact_heading'] = $this->input->post('contact_heading');
            $idata['contact_adds'] = $this->input->post('contact_adds');
            $idata['contact_phone'] = $this->input->post('contact_phone');
            $idata['contact_fax'] = $this->input->post('contact_fax');
            $idata['contact_email'] = $this->input->post('contact_email');

            if ($ID) {
                $flmg =    $this->db->update('tbl_contacts', $idata, array('contact_id' => $ID));
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully updated... !!';
                    $this->session->set_userdata($sdata);
                    redirect("listContact");
                }
            } else {
                $flmg = $this->db->insert('tbl_contacts', $idata);
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully Added... !!';
                    $this->session->set_userdata($sdata);
                    // redirect("test/edit_update_student_list/");
                }
            }
        }
        $data['admin_content'] = $this->load->view('pages/Contact/add_contact', $data, true);
        $this->load->view('dashboard', $data);
    }
    public function list_contact()
    {
        $data = array();
        $data['all_contact_info'] = $this->Contact_model->all_contact_info();
        $data['admin_content'] = $this->load->view('pages/Contact/list_contact', $data, true);
        $this->load->view('dashboard', $data);
    }


    public function delete_contact($user_id)
    {
        $sdata = array();
        $this->Contact_model->delete_contact_by_id($user_id);
        $sdata['messeage'] = 'Data successfully Delete..!!';
        $this->session->set_userdata($sdata);
        redirect('listContact');
    }
}
