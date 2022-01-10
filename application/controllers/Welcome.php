<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// ################ Header Query ################

		$query17 = $this->db->query("SELECT * FROM tbl_header ORDER BY header_id DESC LIMIT 1");
		$id17 = $query17->row();
		$data['header_logo'] = $id17->header_logo;
		$data['header_home'] = $id17->header_home;
		$data['header_features'] = $id17->header_features;
		$data['header_pages'] = $id17->header_pages;
		$data['header_portfolio'] = $id17->header_portfolio;
		$data['header_blog'] = $id17->header_blog;
		$data['header_contact'] = $id17->header_contact;


		// Slider Query 
		$query = $this->db->query("SELECT * FROM tbl_slider_area ");
		$data['slider_area_from_db'] = $query->result_array();

		// Hire Us Query
		$query1 = $this->db->query("SELECT * FROM hire_us ORDER BY hire_us_id DESC LIMIT 1");
		$id1 = $query1->row();
		$data['hire_us_id'] = $id1->hire_us_id;
		$data['side_txt'] = $id1->side_txt;
		$data['hireUs_btn_txt'] = $id1->hireUs_btn_txt;
		$data['hireUs_btn_link'] = $id1->hireUs_btn_link;
		// print("<pre>".print_r($id['result'],true)."</pre>"); exit;

		// Iconbox Query
		$query2 = $this->db->query("SELECT * FROM tbl_iconbox ");
		$data['iconbox_data_from_db'] = $query2->result_array();

		// Bemaxitems Query 
		$query3 = $this->db->query("SELECT * FROM tbl_bemaxitems ORDER BY bemaxitems_id DESC LIMIT 1");
		$id2 = $query3->row();
		$data['bemaxitems_heading'] = $id2->bemaxitems_heading;
		// Or 
		$query4 = $this->db->query("SELECT * FROM tbl_bemaxitems ");
		$data['bemaxitems_data_from_db'] = $query4->result_array();
		// latest Project Query
		$query5 = $this->db->query("SELECT * FROM tbl_latestproject ORDER BY latestProject_id DESC LIMIT 1");
		$id3 = $query5->row();
		$data['latestProject_heading'] = $id3->latestProject_heading;

		$query6 = $this->db->query("SELECT * FROM tbl_latestproject ");
		$data['latestproject_data_from_db'] = $query6->result_array();


		// #################### ChoosUs ###################### 
		$query8 = $this->db->query("SELECT * FROM tbl_chooseus ORDER BY chooseUs_id DESC LIMIT 1");
		$id4 = $query8->row();
		$data['chooseUs_heading'] = $id4->chooseUs_heading;
		$data['chooseUs_img'] = $id4->chooseUs_img;
		$data['chooseUs_imglink'] = $id4->chooseUs_imglink;
		$data['choseUs_vIcon'] = $id4->choseUs_vIcon;

		$query6 = $this->db->query("SELECT * FROM tbl_chooseus ");
		$data['chooseUs_data_from_db'] = $query6->result_array();



		//    ######### CTA Query ###############

		$query9 = $this->db->query("SELECT * FROM tbl_cta ORDER BY cta_id DESC LIMIT 1");
		$id5 = $query9->row();
		$data['cta_heading'] = $id5->cta_heading;
		$data['cta_text'] = $id5->cta_text;
		$data['cta_textLink'] = $id5->cta_textLink;
		$data['cta_linkText'] = $id5->cta_linkText;
		$data['cta_img'] = $id5->cta_img;

		// ################### Blog Query ################

		$query10 = $this->db->query("SELECT * FROM tbl_blog ORDER BY blog_id DESC LIMIT 1");
		$id6 = $query10->row();
		$data['blog_heading'] = $id6->blog_heading;

		$query11 = $this->db->query("SELECT * FROM tbl_blog ");
		$data['blog_data_from_db'] = $query11->result_array();


		// ########### Testimonial Query##########

		$query12 = $this->db->query("SELECT * FROM tbl_testimonial ORDER BY testimonial_id DESC LIMIT 1");
		$id7 = $query12->row();
		$data['testimonial_heading'] = $id7->testimonial_heading;

		$query13 = $this->db->query("SELECT * FROM tbl_testimonial ");
		$data['testimonial_data_from_db'] = $query13->result_array();


		// Clients Query
		$query7 = $this->db->query("SELECT * FROM tbl_client ");
		$data['client_data_from_db'] = $query7->result_array();

		// ############### social-media################

		$query14 = $this->db->query("SELECT * FROM tbl_smedia ORDER BY smedia_id DESC LIMIT 1");
		$id8 = $query14->row();
		$data['smedia_logolink'] = $id8->smedia_logolink;
		$data['smedia_logo'] = $id8->smedia_logo;
		$data['smedia_text'] = $id8->smedia_text;
		$data['smedia_fblink'] = $id8->smedia_fblink;
		$data['smedia_fbicon'] = $id8->smedia_fbicon;
		$data['smedia_twlink'] = $id8->smedia_twlink;
		$data['smedia_twicon'] = $id8->smedia_twicon;
		$data['smedia_golink'] = $id8->smedia_golink;
		$data['smedia_goicon'] = $id8->smedia_goicon;
		$data['smedia_ldlink'] = $id8->smedia_ldlink;
		$data['smedia_ldicon'] = $id8->smedia_ldicon;



		// ############### social-media################

		$query15 = $this->db->query("SELECT * FROM tbl_features ORDER BY feature_id DESC LIMIT 1");
		$id9 = $query15->row();
		$data['feature_heading'] = $id9->feature_heading;
		$data['feature_about'] = $id9->feature_about;
		$data['feature_aLink'] = $id9->feature_aLink;
		$data['feature_story'] = $id9->feature_story;
		$data['feature_sLink'] = $id9->feature_sLink;
		$data['feature_Conditon'] = $id9->feature_Conditon;
		$data['feature_cLink'] = $id9->feature_cLink;
		$data['feature_policy'] = $id9->feature_policy;
		$data['feature_pLink'] = $id9->feature_pLink;
		$data['feature_map'] = $id9->feature_map;
		$data['feature_mLink'] = $id9->feature_mLink;


			// ############### social-media################

			$query15 = $this->db->query("SELECT * FROM tbl_contacts ORDER BY contact_id DESC LIMIT 1");
			$id9 = $query15->row();
			$data['contact_heading'] = $id9->contact_heading;
			$data['contact_adds'] = $id9->contact_adds;
			$data['contact_phone'] = $id9->contact_phone;
			$data['contact_fax'] = $id9->contact_fax;
			$data['contact_email'] = $id9->contact_email;


				// ############### Newslleter ################

				$query16 = $this->db->query("SELECT * FROM tbl_newslleter ORDER BY newslleter_id DESC LIMIT 1");
				$id10 = $query16->row();
				$data['newslleter_heading'] = $id10->newslleter_heading;
				$data['newslleter_text'] = $id10->newslleter_text;
				$data['newslleter_btnText'] = $id10->newslleter_btnText;
		// print("<pre>".print_r($data['client_data_from_db'],true)."</pre>"); exit;




		$this->load->view('index', $data);
	}



	public function login()
	{
		$this->load->view('welcome_message');
	}
}
