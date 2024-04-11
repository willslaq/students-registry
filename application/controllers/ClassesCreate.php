<?php
class ClassesCreate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Classes_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('create_classes');
    }

    public function create()
    {
        $name = $this->input->post('name');
        $number = $this->input->post('number');
        $max_students = $this->input->post('max_students');
        $teacher = $this->input->post('teacher');
        $schedule_type = $this->input->post('schedule_type');

        $data = array(
            'name' => $name,
            'number' => $number,
            'max_students' => $max_students,
            'teacher' => $teacher,
            'schedule_type' => $schedule_type,
        );
        log_message('error', $data);

        $this->Classes_model->createClass($data);

        redirect('classes');
    }
}
