<?php
require('./fpdf.php');
if (isset($_POST['patient_name']) && isset($_POST['patient_id']) && isset($_POST['doctor_name']) && isset($_POST['doctor_id']) && isset($_POST['prescription'])) {
    //    if null
    if (empty($_POST['patient_name']) || empty($_POST['patient_id']) || empty($_POST['doctor_name']) || empty($_POST['doctor_id']) || empty($_POST['prescription'])) {
        echo "Please fill all the fields";
    } else {
        $patient_name = $_POST['patient_name'];
        $patient_id = $_POST['patient_id'];
        $doctor_name = $_POST['doctor_name'];
        $doctor_id = $_POST['doctor_id'];
        $prescription = $_POST['prescription'];
        $date = date("Y-m-d");
        $time = date("h:i:sa");
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, 'Prescription');
        $pdf->Ln();
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'Patient Name: ' . $patient_name);
        $pdf->Ln();
        $pdf->Cell(40, 10, 'Patient ID: ' . $patient_id);
        $pdf->Ln();
        $pdf->Cell(40, 10, 'Doctor Name: ' . $doctor_name);
        $pdf->Ln();
        $pdf->Cell(40, 10, 'Doctor ID: ' . $doctor_id);
        $pdf->Ln();
        $pdf->Cell(40, 10, 'Date: ' . $date);
        $pdf->Ln();
        $pdf->Cell(40, 10, 'Time: ' . $time);
        $pdf->Ln();
        $pdf->Cell(40, 10, 'Prescription: ' . $prescription);
        $pdf->Output();
    }
}
