<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: firman
 * Date: 27/10/16
 * Time: 13:35
 */
abstract class MY_Model extends CI_Model
{

    protected $__table;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get($this->__table);
        return $query->result();
    }

    public function update_entry()
    {
        $this->db->update($this->__table, $this, array('id' => $this->input->post('id')));
    }

    public function insert_entry()
    {
        $this->db->insert($this->__table, $this);
    }
}