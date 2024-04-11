<?php
class StudentsReport extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
    }

    public function generate()
    {
        $data['students'] = $this->Student_model->listStudents();

        $pdf = new FPDF();

        // $pdf->SetHeaderData('logo.png', 30, 'Relatório de Estudantes', 'Classe: ');

        // $pdf->SetFooterData('footer_logo.png', 30);

        $pdf->AddPage();
        foreach ($data['students'] as $student) {
            $pdf->SetFont('helvetica', '', 12);
            $pdf->Cell(0, 10, 'Nome: ' . $student->name, 0, 1);
            $pdf->Cell(0, 10, 'Nascimento: ' . $student->birth_date, 0, 1);
        }

        $pdf->Output('students_report.pdf', 'D');
    }
}
