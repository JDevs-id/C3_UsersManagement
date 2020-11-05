<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
	}
	public function index()
	{
		$title['title'] = 'Users Management';
		$data['users'] = $this->Users_model->getAllUsers();
		$this->load->view('layout/header', $title);
		$this->load->view('pages/home', $data);
		$this->load->view('layout/footer');
	}

	public function about()
	{
		$title['title'] = 'About us';
		$data['data'] = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, amet sunt impedit eaque, libero distinctio asperiores incidunt exercitationem qui ab ducimus suscipit odit aut sit, blanditiis optio nostrum aperiam iure!';
		$this->load->view('layout/header', $title);
		$this->load->view('pages/about', $data);
		$this->load->view('layout/footer');
	}

	public function contact()
	{
		$title['title'] = 'Contact us';
		$this->load->view('layout/header', $title);
		$this->load->view('pages/contact');
		$this->load->view('layout/footer');
	}
}
