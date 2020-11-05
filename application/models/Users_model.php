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
            'username' => $this->input->post('inputUsername', true),
            'password' => $this->input->post('inputPassword', true),
            'status' => 'logout',
            'sessions' => 0,
            'account_status' => 'enable',
        );

        $this->db->insert('tb_users', $data);
    }

    public function enableUser($id)
    {
        $data = array(
            'status' => 'logout',
            'sessions' => 0,
            'account_status' => 'enable',
        );

        $this->db->where('id', $id);
        $this->db->update('tb_users', $data);
    }

    public function disableUser($id)
    {
        $data = array(
            'status' => 'logout',
            'sessions' => 0,
            'account_status' => 'disable',
        );

        $this->db->where('id', $id);
        $this->db->update('tb_users', $data);
    }

    public function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_users');
    }
}
