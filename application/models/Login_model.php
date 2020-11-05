<?php
class Login_model extends CI_Model
{
    public function changeSession($id)
    {
        $data = array(
            'sessions' => 1
        );

        $this->db->where('id', $id);
        $this->db->update('tb_admin', $data);
    }
}
