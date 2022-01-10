<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


	public function admin_model_info($email_address,$password)
	{
		$this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('email_address',$email_address);
        $this->db->where('password',md5($password));
        $query_result = $this->db->get();
        $result =  $query_result->row();
        
        return $result;
	}

   
    public function all_student_info()
	{
		$q = $this->db->query('select * FROM tbl_slider_area ');
		$data = $q->result_array();
        return $data;
        
	}


   

    public function delete_student_by_id($user_id){
        $suc = $this->db->delete('tbl_slider_area', array('slider_id' => $user_id));

			

    }


    // ########################### Hire Us ########################



    public function all_hire_us_info()
	{
		$q = $this->db->query('select * FROM hire_us ');
		$data = $q->result_array();
        return $data;
        
	}

    public function delete_hireUs_by_id($user_id){
        $suc = $this->db->delete('hire_us', array('hire_us_id' => $user_id));

			// if ($suc) {
			// 	$this->session->set_flashdata('success', 'Data Successfully Delete...');
			// 	// redirect("test/stu_list/");
			// }

    }

}
