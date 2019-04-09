<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->helper(array('form', 'url'));
		$this->load->model('crud_model');
		$this->load->library('image_lib');
		$this->load->library("pagination");
	}
	
	public function index()
	{
		if (!$this->tank_auth->is_logged_in()) { // not logged in
			redirect('auth/login');
		}
	}

	public function create()
	{
		if (!$this->tank_auth->is_logged_in()) { // not logged in
			redirect('auth/login');
		} else {
			$data['author_id'] = $this->tank_auth->get_user_id();
		}
		$this->load->library('form_validation');

		// error message class
		$this->form_validation->set_error_delimiters('<div class="ui message red">','</div>');
		// setting validation rules
		$this->form_validation->set_rules('title', 'title', 'required|min_length[4]');
		$this->form_validation->set_rules('description', 'Description', 'required|min_length[20]|max_length[99999]');
		
		// uploading files settings
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		// $config['max_width']            = 2024;
		// $config['max_height']           = 1500;

		$this->upload->initialize($config);

		if($this->form_validation->run() == FALSE){ // validation not passed; either showing form for the first time, or showing validation errors
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('includes/header');
			$this->load->view('article_create_view', $error);
			$this->load->view('includes/footer');

		} else { // form validation has passed
			if ($this->upload->do_upload('img')) {
				$upload_data = $this->upload->data();
				$data['img'] = $upload_data['file_name'];

				$config['image_library'] = 'gd2';
				$config['source_image'] ='./uploads/'.$data['img'];
				$config['create_thumb'] = TRUE;
				$config['width'] = 350;
				$config['height'] = 350;
				$config['new_image'] ='./uploads/thumb/'.$data['img'];

				$this->load->library('image_lib', $config);
				$this->image_lib->initialize($config);
				$this->image_lib->resize();


				$data['thumbnail'] = $upload_data['raw_name'].'_thumb'.$upload_data['file_ext'];
				$data['title'] = $this->input->post('title');
				$data['description'] = $this->input->post('description');

				$this->crud_model->insert_article($data);
				$this->session->set_flashdata('message', 'Insert Successful');
				redirect("article/read", "location");
			} else {
				$error = array(
					'error' => $this->upload->display_errors()
				);
				
				$this->load->view('includes/header');
				$this->load->view('article_create_view', $error);
				$this->load->view('includes/footer');
			}
		}
	}

	public function edit($id)
	{
		if(!is_numeric($id)) {
			redirect('/', 'location');
		}
		
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="ui error message">','</div>');
		$this->form_validation->set_rules('title', 'title', 'required|min_length[4]');
		$this->form_validation->set_rules('description', 'Description', 'required|min_length[20]|max_length[99999]');

		if($this->form_validation->run() == FALSE){ // validation not passed; either showing form for the first time, or showing validation errors
			// load existing data
			$data['results'] = $this->crud_model->read_article_detail($id);

			$this->load->view('includes/header');
			$this->load->view('article_edit_view', $data);
			$this->load->view('includes/footer');

		}else{ // form validation has passed

			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['results'] = $this->crud_model->edit_article($data, $id);
			$this->session->set_flashdata('message', 'Insert Successful');

			redirect("/article/edit/$id", "location");
		}
	}

	public function delete($id)
	{
		$data['results'] = $this->crud_model->delete_article($id);
		redirect("/article/read", "location");
}


	public function read(){
		// $data['results'] = $this->crud_model->read_articles();
		$config['base_url'] = base_url() . "article/read";
		$config['total_rows'] = $this->crud_model->record_count();
		$config['per_page'] = 4;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'ui blue button');

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
       	$data["results"] = $this->crud_model->
           read_articles($config["per_page"], $page);
      	$data["links"] = $this->pagination->create_links();
		/*echo "<pre>";
		 print_r($data);// just testing
		 echo "</pre>";*/
		$this->load->view('includes/header');
		$this->load->view('article_read_view',$data);
		$this->load->view('includes/footer');
	}

	public function detail($id){
		if(!is_numeric($id)) {
			redirect('/', 'location');
		}
		$data['results'] = $this->crud_model->read_article_detail($id);
		
		$this->load->helper("typography");

		$this->load->view('includes/header');
		$this->load->view('article_detail_view',$data);
		$this->load->view('includes/footer');
	}


}
