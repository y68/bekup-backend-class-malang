<?php

class Model_peserta extends CI_Model {

    public function save($data)
    {
        $url = "api/insert";
        $this->db-get($this->url, $data,);
        return $this->db->affected_rows();
    }
}
