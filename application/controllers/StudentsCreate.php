<?php
class StudentsCreate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('create_students');
    }

    public function create()
    {
        $name = $this->input->post('name');
        $document = $this->input->post('document');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $parent_name = $this->input->post('parent_name');
        $parent_phone = $this->input->post('parent_phone');
        $parent_email = $this->input->post('parent_email');
        $birth_date = $this->input->post('birth_date');

        $data = array(
            'name' => $name,
            'document' => $document,
            'address' => $address,
            'city' => $city,
            'parent_name' => $parent_name,
            'parent_phone' => $parent_phone,
            'parent_email' => $parent_email,
            'birth_date' => $birth_date
        );
        log_message('error', $data);

        $this->Student_model->createStudent($data);

        redirect('students');
    }
}
