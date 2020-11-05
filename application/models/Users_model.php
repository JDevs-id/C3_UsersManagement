<?php
class Users_model extends CI_Model
{
    public function getAllUsers()
    {
        return $this->db->get('tb_users')->result_array();
    }

    public function addUser()
    {
        $data = array(
            'id' => '',
            'username' => $this->input->post('inputUsername'),
            'password' => $this->input->post('inputPassword'),
            'status' => 'logout',
            'sessions' => 0
        );

        $this->db->insert('tb_users', $data);
    }
}
