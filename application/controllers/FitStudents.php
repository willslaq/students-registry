<?php
class FitStudents extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->model('Classes_model');
    }

    public function index()
    {
        $data['students'] = $this->Student_model->listStudents();
        $data['classes'] = $this->Classes_model->listClasses();

        $this->load->view('fit_students', $data);
    }

    public function save()
    {
        $studentId = $this->input->post('studentId');
        $classId = $this->input->post('classId');

        $this->Student_model->updateClassId($studentId, $classId);
        redirect('home');
    }
}
