<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iconbox extends CI_Controller {

	
	public function add_iconbox()
	{
		
		$data = array();

		
		
		$data['admin_content'] = $this->load->view('pages/iconbox_ct3',$data,true);
		$this->load->view('dashboard',$data);
		
	}	

	public function save_iconbox(){
		$this->iconbox_model->iconbox_model_info();
		$sdata = array();
		$sdata['messeage'] = 'Data successfully added.. !!';
		$this->session->set_userdata($sdata);
		// redirect('Iconbox');
	}

	public function manage_iconbox_list()
	{
		$data = array();
		$data['iconbox_list_info'] = $this->iconbox_model->iconbox_list_info();
		$data['admin_content'] = $this->load->view('pages/iconbox_list',$data,true);
		$this->load->view('dashboard',$data);
	}

	

	public function edit_iconbox($iconbox_id){
		
	
		$data = array();
		$data['iconbox_info_by_id'] = $this->iconbox_model->iconbox_info_by_id($iconbox_id);
		$data['admin_content'] = $this->load->view('pages/edit_iconbox',$data,true);
		$this->load->view('dashboard',$data);


	}

	public function delete_iconbox($iconbox_id){
		$sdata = array();
		 $this->iconbox_model->delete_iconbox_by_id($iconbox_id);
		 $sdata['messeage']='Data successfully delete.. !!';
		 $this->session->set_userdata($sdata);
		// redirect('Iconbox');
	}


	public function update_iconbox()
	{
		$this->iconbox_model->update_iconbox_info();
		$sdata['messeage']='updated successfully !!';
		$this->session->set_userdata($sdata);
		redirect('iconboxList');
}

}
