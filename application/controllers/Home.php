<?php

class Home extends CI_Controller {
    public function index() {
        $this->load->view('home');
    }

    public function students() {
        // Lógica para a página 1
        $this->load->view('students');
    }

    public function classes() {
        // Lógica para a página 2
        $this->load->view('classes');
    }

    public function fitstudents() {
        // Lógica para a página 3
        $this->load->view('fitstudents');
    }
}
