<?php

class CustomPDF extends FPDF
{
    public function Header()
    {
        $this->SetFont('Arial', 'B', 20);
        $this->Cell(0, 10, 'Relatorio de Estudantes por Turma', 0, 1, 'C');
    }

    public function Footer()
    {
        $this->Image('assets/logo.png', 10, 265, 30);
    }
}

class StudentsReport extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->model('Classes_model');
    }

    public function generate()
    {
        $students = $this->Student_model->listStudents();
        $classes = $this->Classes_model->listClasses();

        $pdf = new CustomPDF();

        $pdf->AddPage();
        foreach ($classes as $class) {
            $pdf->SetFont('helvetica', '', 15);
            $pdf->Cell(0, 10, 'Turma: ' . $class->name, 0, 1);
            foreach ($students as $student) {
                if ($student->classes_id == $class->id) {
                    $pdf->SetFont('helvetica', '', 12);
                    $pdf->Cell(0, 10, 'Nome: ' . $student->name, 0, 1);
                }
            }
        }
        $pdf->Output('students_report.pdf', 'D');
    }
}
