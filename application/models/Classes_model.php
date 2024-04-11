<?php
class Classes_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function createClass($data)
    {
        $this->db->insert('classes', $data);
    }

    public function listClasses()
    {
        return $this->db->get('classes')->result();
    }

    public function listClassById($id)
    {
        return $this->db->get_where('classes', array('id' => $id))->row();
    }

    public function deleteClass($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('classes');
    }
}
