<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $title['title'] = 'Add Data';
        $this->form_validation->set_rules('inputUsername', 'username', array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('inputPassword', 'password', array('required', 'min_length[8]', 'max_length[20]'));
        $this->form_validation->set_rules('repeatPassword', 'repeat password', array('required', 'matches[inputPassword]'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $title);
            $this->load->view('pages/crud/add');
            $this->load->view('layout/footer');
        } else {
            $this->Users_model->addUser();
            redirect('/');
            echo "<script>alert('same message');</script>";
        }
    }
}
