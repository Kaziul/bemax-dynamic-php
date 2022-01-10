<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bemaxitems extends CI_Controller {

	
	public function add_bemaxitems($ID = null)
	{
		$data = array();
		// print("<pre>".print_r($data,true)."</pre>"); exit;
		$data['bemaxitems_heading'] = "";
        $data['bemaxitems_icon'] = "";
        $data['bemaxitems_sub_heading'] = "";
        $data['bemaxitems_text'] = "";

        if ($ID) {
            $r = $this->db->query("select * FROM tbl_bemaxitems where bemaxitems_id = $ID ");
            $user = $r->row();

            // $data['bemaxitems_id'] = $user->bemaxitems_id;
            $data['bemaxitems_heading'] = $user->bemaxitems_heading;
            $data['bemaxitems_icon'] = $user->bemaxitems_icon;
            $data['bemaxitems_sub_heading'] = $user->bemaxitems_sub_heading;
            $data['bemaxitems_text'] = $user->bemaxitems_text;
        }

        $this->form_validation->set_rules('bemaxitems_heading', 'Bemaxitems Heading', 'trim|required');
        $this->form_validation->set_rules('bemaxitems_icon', 'Bemaxitems Icon', 'trim|required');
        $this->form_validation->set_rules('bemaxitems_sub_heading', 'Bemaxitems Sub Heading', 'trim|required');
        $this->form_validation->set_rules('bemaxitems_text', 'Bemaxitems Text', 'trim|required');
        if ($this->form_validation->run() == true) {
            $idata['bemaxitems_heading'] = $this->input->post('bemaxitems_heading');
            $idata['bemaxitems_icon'] = $this->input->post('bemaxitems_icon');
            $idata['bemaxitems_sub_heading'] = $this->input->post('bemaxitems_sub_heading');
            $idata['bemaxitems_text'] = $this->input->post('bemaxitems_text');

            if ($ID) {
                $suc = $this->db->update('tbl_bemaxitems', $idata, array('bemaxitems_id' => $ID));
                if ($suc) {
                    $sdata['messeage'] = 'updated successfully !!';
                    $this->session->set_userdata($sdata);
					redirect('bemaxlist');
                }
            } else {
                $suc = $this->db->insert('tbl_bemaxitems', $idata);
                if ($suc) {
                    $sdata['messeage'] = 'Insert successfully !!';
                    $this->session->set_userdata($sdata);
                }
            }
        }
		$data['admin_content'] = $this->load->view('pages/bemaxItems/add_bemaxItems',$data,true);
		$this->load->view('dashboard',$data);

		
	}	

	public function bemaxitems_list()
	{
		$data = array();
		$data['bemaxitems_from_db'] = $this->bemaxitems_model->bemaxitems_list_from_db();
		// print("<pre>".print_r($data['bemaxitems_from_db'],true)."</pre>"); exit;
		$data['admin_content'] = $this->load->view('pages/bemaxItems/list_bemaxItems',$data,true);	
		$this->load->view('dashboard',$data);
	}


// 	public function edit_bemaxitems($user_id)
// 	{
// 		$data = array();
		
// 		// $data = $this->bemaxitems_model->bemaxitems_model_info();
// 		$data['edit_bemaxitems_info_by_id'] = $this->bemaxitems_model->edit_bemaxitems_info_by_id($user_id);
// 		// print("<pre>".print_r($data['edit_bemaxitems_info_by_id'],true)."</pre>"); exit;
// 		$data['admin_content'] = $this->load->view('pages/bemaxItems/edit_bemaxItems',$data,true);
// 		$this->load->view('dashboard',$data);

// }
	public function delete_student($user_id)
	{
		$sdata = array();
		 $this->bemaxitems_model->delete_bemaxitems_by_id($user_id);
		 $sdata['messeage']='student delete successfully !!';
		 $this->session->set_userdata($sdata);
		redirect('Bemaxitems/bemaxitems_list');
}



}
