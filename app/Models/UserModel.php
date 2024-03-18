<?php

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Create
    public function create_user($data)
    {
        return $this->db->insert('users', $data);
    }

    // Get
    public function get_user($id)
    {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }

    // Update
    public function update_user($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    // Delete
    public function delete_user($id)
    {
        return $this->db->delete('users', array('id' => $id));
    }
}
