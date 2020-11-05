<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Users_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('pages/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_admin', ['username' => $username])->row_array();
        if ($user) {
            if ($user['sessions'] == 0) {
                if ($password == $user['password']) {
                    $id = $user['id'];
                    $this->Login_model->changeSession($id);

                    $data['users'] = $this->Users_model->getAllUsers();
                    redirect('pages/', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong admin password! Please check again your input!');
                    redirect('login');
                }
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong admin username! Please check again your input!');
            redirect('login');
        }
    }
}
