<?php

class Model_peserta extends CI_Model {

    public function save($data)
    {
        $this->db->insert('ProfileUser', $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update('ProfileUser', $data, $where);
        return $this->db->affected_rows();
    }

    public function get_by_id($id)
    {
        $this->db->from('ProfileUser');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
    }
}
