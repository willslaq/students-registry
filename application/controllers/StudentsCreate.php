<?php
class StudentsCreate extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('create_students');
    }

    public function create() {
        log_message('error', 'entreeeeeeeeeeeeeeei');
        $name = $this->input->post('name');
        $document = $this->input->post('document');

        
        $data = array(
            'name' => $name,
            'document' => $document
        );
        log_message('error', $data);
        
        $this->Student_model->createStudent($data);

        redirect('students');
    }
}
