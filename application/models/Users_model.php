<?php
class Users_model extends CI_Model
{
    public function getAllUsers()
    {
        return $this->db->get('tb_users')->result_array();
    }


    public function getAdmin()
    {
        return $this->db->get('tb_admin')->result_array();
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

    public function resetAdmin()
    {
        $data = array(
            'username' => 'admin',
            'password' => 'admin',
            'sessions' => 0,
            'reset_code' => 'reset'
        );

        $this->db->where('id', 1);
        $this->db->update('tb_admin', $data);
    }
}
