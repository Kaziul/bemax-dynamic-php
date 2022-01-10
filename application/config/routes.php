<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin-login'] = 'admin/admin_login';


$route['logout'] = 'admin/logout';
$route['dashboard'] = 'admin/dashboard';
$route['addSlider'] = 'admin/add_student';
$route['listSlider'] = 'admin/manage_student';
$route['hire-us'] = 'admin/hire_us';
$route['hire-us-list'] = 'admin/hire_us_list';
// $route['save-hire-us'] = 'admin/save_hire_us';

$route['editSlider/(.+)'] = 'admin/add_student/$1';
$route['deleteSlider/(.+)'] = 'admin/delete_student/$1';
$route['update-student'] = 'admin/update_student';
$route['save-admin'] = 'admin/save_admin';
$route['edit-heirUs/(.+)'] = 'admin/hire_us/$1';
// $route['edit-iconbox/(.+)'] = 'Iconbox/edit_iconbox/$1';

// ####################### IconBox ################## 

$route['addIconbox'] = 'Iconbox/add_iconbox';
$route['iconboxList'] = 'Iconbox/manage_iconbox_list';
$route['iconboxEidt/(.+)'] = 'Iconbox/edit_iconbox/$1';
$route['iconboxDelete/(.+)'] = 'Iconbox/delete_iconbox/$1';


// ####################### Bemax Items ################## 

$route['bemaxadd'] = 'Bemaxitems/add_bemaxitems';
$route['bemaxlist'] = 'Bemaxitems/bemaxitems_list';
$route['bemaxEdit/(.+)'] = 'Bemaxitems/add_bemaxitems/$1';


// #################### Latest Project ################## 

$route['addProject'] = 'LatestProject/add_latestProject';
$route['listProject'] = 'LatestProject/list_latestProject';
$route['deleteLproject/(.+)'] = 'LatestProject/delete_student/$1';
$route['editProject/(.+)'] = 'LatestProject/add_latestProject/$1';


// ################## ChooseUs ############## 

$route['addChooseUs'] = 'ChooseUs/add_chooseUs';
$route['listChooseUs'] = 'ChooseUs/list_chooseUs';
$route['editCH/(.+)'] = 'ChooseUs/add_chooseUs/$1';
$route['deleteCH/(.+)'] = 'ChooseUs/delete_chooseUs/$1';

// ############## CTA ########### 
$route['addCTA'] = 'Cta_Controller/add_cta';
$route['listCTA'] = 'Cta_Controller/list_cta';
$route['edit/(.+)'] = 'Cta_Controller/add_cta/$1';
$route['update'] = 'Cta_Controller/list_cta';
$route['delete/(.+)'] = 'Cta_Controller/delete_cta/$1';
// $route['delete'] = 'Cta_Controller/list_cta';


// ############## BLOG ##########
$route['addBlog'] = 'Blog_Controller/add_blog';
$route['listBlog'] = 'Blog_Controller/list_blog';
$route['editBlog/(.+)'] = 'Blog_Controller/add_blog/$1';
$route['deleteBlog/(.+)'] = 'Blog_Controller/delete_blog/$1';


// ################### Testimonials #############
$route['addTestimonial'] = 'Testimonial_Controller/add_testiomonial';
$route['listTestimonial'] = 'Testimonial_Controller/list_testiomonials';
$route['editTestimonial/(.+)'] = 'Testimonial_Controller/add_testiomonial/$1';
$route['deleteTestimonial/(.+)'] = 'Testimonial_Controller/delete_testimonials/$1';

// ######################## Clients ################### 
$route['addClients'] = 'Clients_Controller/add_Clients';
$route['listClients'] = 'Clients_Controller/list_Clients';
$route['editClients/(.+)'] = 'Clients_Controller/add_Clients/$1';
$route['deleteClients/(.+)'] = 'Clients_Controller/delete_clients/$1';


// #####################social-media #################
$route['addMedia'] = 'Smedia_Controller/add_Smedia';
$route['listMidia'] = 'Smedia_Controller/list_media';
$route['mediaEdit/(.+)'] = 'Smedia_Controller/add_Smedia/$1';
$route['meadiaDelete/(.+)'] = 'Smedia_Controller/delete_media/$1';


// ##################### Features #################
$route['addFeature'] = 'Feature_Controller/add_feature';
$route['listFeature'] = 'Feature_Controller/list_feature';
$route['featureEdit/(.+)'] = 'Feature_Controller/add_feature/$1';
$route['featureDelete/(.+)'] = 'Feature_Controller/delete_feature/$1';


// ##################### Contact #################
$route['addContact'] = 'Contact_Controller/add_contact';
$route['listContact'] = 'Contact_Controller/list_contact';
$route['contactEdit/(.+)'] = 'Contact_Controller/add_contact/$1';
$route['contactDelete/(.+)'] = 'Contact_Controller/delete_contact/$1';


// ##################### Newslleter #################
$route['addNewslleter'] = 'Newslleter_Controller/add_newslleter';
$route['listNewslleter'] = 'Newslleter_Controller/list_newslleter';
$route['newslleterEdit/(.+)'] = 'Newslleter_Controller/add_newslleter/$1';
$route['newslleterDelete/(.+)'] = 'Newslleter_Controller/delete_newslleter/$1';

// ##################### Header #################
$route['addHeader'] = 'Header_Controller/add_header';
$route['listHeader'] = 'Header_Controller/list_header';
$route['headerEdit/(.+)'] = 'Header_Controller/add_header/$1';
$route['headerDelete/(.+)'] = 'Header_Controller/delete_header/$1';