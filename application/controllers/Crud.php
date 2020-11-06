<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Login_model');
        $this->load->library('form_validation');
        $this->dataAdmin = $this->db->get_where('tb_admin', ['id' => $this->session->userdata('id')])->row_array();
    }

    public function index()
    {
        $data = [
            'title' => 'Form add data',
            'admin' => $this->dataAdmin
        ];
        $this->form_validation->set_rules('inputUsername', 'username', array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('inputPassword', 'password', array('required', 'min_length[8]', 'max_length[20]'));
        $this->form_validation->set_rules('repeatPassword', 'repeat password', array('required', 'matches[inputPassword]'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('pages/crud/add');
            $this->load->view('layout/footer');
        } else {
            $this->Users_model->addUser();
            $this->session->set_flashdata('flash', 'added');
            redirect('pages');
        }
    }

    public function disable($id)
    {
        $this->Users_model->disableUser($id);
        $this->session->set_flashdata('flash', 'disabled');
        redirect('pages');
    }


    public function enable($id)
    {
        $this->Users_model->enableUser($id);
        $this->session->set_flashdata('flash', 'enabled');
        redirect('pages');
    }

    public function delete($id)
    {
        $this->Users_model->deleteData($id);
        $this->session->set_flashdata('flash', 'deleted');
        redirect('pages');
    }

    public function setting()
    {
        $data = [
            'title' => 'Change user admin',
            'admin' => $this->dataAdmin
        ];
        $id = $this->dataAdmin['id'];
        $password = $this->dataAdmin['password'];
        $this->form_validation->set_rules('newUsername', 'username', array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('currentPassword', 'current password', array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('newPassword', 'new password', array('required', 'min_length[3]', 'max_length[20]'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('pages/crud/setting');
            $this->load->view('layout/footer');
        } else {
            $this->Login_model->updateData($id, $password);
            $this->session->set_flashdata('flash', 'added');
            redirect('login');
        }
    }

    public function reset()
    {
        $data = [
            'title' => "Reset admin user",
        ];
        $dataAdmin = $this->Users_model->getAdmin();

        $this->form_validation->set_rules('resetCode', 'reset code', 'trim|required');
        if ($this->form_validation->run() == TRUE && set_value('resetCode') == $dataAdmin['0']['reset_code']) {
            $this->Users_model->resetAdmin();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Admin user reseted');
            redirect('login');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong reset code!');
            $this->load->view('pages/crud/reset', $data);
        }
    }
}
