<?php
class Student_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function createStudent($data)
    {
        $this->db->insert('students', $data);
    }

    public function listStudents()
    {
        return $this->db->get('students')->result();
    }

    public function listStudentById($id)
    {
        return $this->db->get_where('students', array('id' => $id))->row();
    }

    public function updateClassId($studentId, $classId)
    {
        log_message('info', 'Updating class ID for student: ' . $studentId);
        $this->db->where('id', $studentId);
        $this->db->update('students', ['classes_id' => $classId]);
    }

    public function deleteStudent($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('students');
    }
}
