<?php
class Classes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Classes_model');
    }

    public function index()
    {
        $data['classes'] = $this->Classes_model->listClasses();
        $this->load->view('classes', $data);
    }
}
