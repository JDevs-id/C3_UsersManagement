<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
	protected $dataAdmin;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->library('form_validation');
		$this->dataAdmin = $this->db->get_where('tb_admin', ['id' => $this->session->userdata('id')])->row_array();
	}
	public function index()
	{
		$data = [
			'title' => 'Users Management',
			'admin' => $this->dataAdmin,
			'users' => $this->Users_model->getAllUsers()
		];

		$this->load->view('layout/header', $data);
		$this->load->view('pages/home');
		$this->load->view('layout/footer');
	}

	public function about()
	{
		$data = [
			'title' => 'About us',
			'admin' => $this->dataAdmin,
			'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, amet sunt impedit eaque, libero distinctio asperiores incidunt exercitationem qui ab ducimus suscipit odit aut sit, blanditiis optio nostrum aperiam iure!'
		];

		$this->load->view('layout/header', $data);
		$this->load->view('pages/about', $data);
		$this->load->view('layout/footer');
	}

	public function contact()
	{
		$data = [
			'title' => 'Contact us',
			'admin' => $this->dataAdmin
		];
		$this->load->view('layout/header', $data);
		$this->load->view('pages/contact');
		$this->load->view('layout/footer');
	}

	public function reset()
	{
		$data = [
			'title' => "Reset admin user",
		];
		$this->load->view('pages/crud/reset', $data);
	}
}
