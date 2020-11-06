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
		$this->load->view('pages/about');
		$this->load->view('layout/footer');
	}

	public function contact()
	{
		$this->load->library('googlemaps');
		$config['center'] = '-6.938711, 109.606203';
		$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);
		$marker = array();
		$marker['position'] = '-6.938711, 109.606203';
		$this->googlemaps->add_marker($marker);

		$data = [
			'title' => 'Contact us',
			'admin' => $this->dataAdmin,
			'map' => $this->googlemaps->create_map(),
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
