<?php

class Model_peserta extends CI_Model {

    public function save($data)
    {
        $this->db->set($data);
        $this->db->insert('ProfileUser');
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->where('id', $where['id']);
        $this->db->set($data);
        return $this->db->update('ProfileUser');
    }

    public function get_by_id($id)
    {
        $this->db->from('ProfileUser');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
    }

    public function loginAuth($username , $password)
    {
        $this->db->where( array('username' => $username , 'password' => $password));
        $query = $this->db->get('User');

        if ( $query->num_rows() > 0)
        {
            return TRUE;
        }
        
        return FALSE;
    }
}
