<?php
class Login_model extends CI_Model
{
    public function login($id)
    {
        $data = array(
            'sessions' => 1
        );

        $this->db->where('id', $id);
        $this->db->update('tb_admin', $data);
    }

    public function logout($id)
    {
        $data = array(
            'sessions' => 0
        );

        $this->db->where('id', $id);
        $this->db->update('tb_admin', $data);
    }

    public function updateData($id, $password)
    {
        $data = array(
            'username' => $this->input->post('newUsername', true),
            'password' => $this->input->post('newPassword', true),
            'sessions' => 0
        );

        $this->db->where('id', $id);
        $this->db->where('password', $password);
        $this->db->update('tb_admin', $data);
    }
}
