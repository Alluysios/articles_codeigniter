<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		// moving data from controller to view

		$data['heading'] = "CodeIgniter Version 3.1.10";

		$this->load->view('includes/header');
		$this->load->view('home_view', $data);
		$this->load->view('includes/footer');
	}

	public function test(){

		// a sample public function connected to test_view controller

		$this->load->view('includes/header');
		$this->load->view('test_view', $myArray);
		$this->load->view('includes/footer');
	}
}
