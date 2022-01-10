<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clients_Controller extends CI_Controller
{

	// print("<pre>".print_r($_POST,true)."</pre>"); exit;

	public function add_Clients($ID = null)
	{
		$data = array();
		$data['client_img'] = "";
		if ($ID) {
			$r = $this->db->query("select * FROM tbl_client where client_id = $ID ");
			$user = $r->row();
			$data['old_img'] = $user->client_img;
			$data['client_img'] = $user->client_img;
		}

		//if (empty($_FILES['client_img']['name'])) {
			// $this->form_validation->set_rules('client_img', 'Image', 'required');
		//}
		// print("<pre>".print_r($_FILES,true)."</pre>"); exit;
		if (!empty($_FILES['client_img']['name'])) {
			$config['upload_path']          = 'back-end/uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('client_img'))
            {
                   $this->upload->display_errors();
            }
            else
            {
                    $sdata = $this->upload->data();
                    @unlink(FCPATH.'/back-end/uploads/'.$data['client_img']);

                    $idata['client_img'] = $sdata['file_name'];
            }
            if ($ID) {
                $flmg =    $this->db->update('tbl_client', $idata, array('client_id' => $ID));
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully updated... !!';
                    $this->session->set_userdata($sdata);
                    redirect("listClients");
                }
            } else {
                $flmg = $this->db->insert('tbl_client', $idata);
                if ($flmg) {
                    $sdata['messeage'] = 'Data successfully Added... !!';
                    $this->session->set_userdata($sdata);
                    // redirect("test/edit_update_student_list/");
                }
            }
        }
		
		$data['admin_content'] = $this->load->view('pages/Clients/add_client', $data, true);
		$this->load->view('dashboard', $data);
	}


	public function list_Clients()
	{
		$data = array();
		$data['all_clients_info'] = $this->Clients_model->all_clients_info_from_db();
		$data['admin_content'] = $this->load->view('pages/Clients/list_client', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function delete_clients($user_id)
	{
		$sdata = array();
		$this->Clients_model->delete_clients_by_id($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('listClients');
	}
}
