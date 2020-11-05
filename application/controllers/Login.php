<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }
    public function index()
    {
        $data['users'] = $this->Users_model->getAllUsers();
        $this->load->view('layout/header');
        $this->load->view('pages/home', $data);
        $this->load->view('layout/footer');
    }
}
