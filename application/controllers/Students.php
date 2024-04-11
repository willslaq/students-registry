<?php
class Students extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
    }

    public function index()
    {
        $data['students'] = $this->Student_model->listStudents();
        $this->load->view('students', $data);
    }
}
