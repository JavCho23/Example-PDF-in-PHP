<?php
require 'fpdf/fpdf.php';
class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 30);
        $this->SetFillColor(212, 212, 212);

        $this->Cell(50, 800, '', 1, 0, 'C', 1);
        $this->SetXY(10, 10);
        $this->Cell(50, 50, 'Imagen', 1, 0, 'L');
        $this->Cell(135, 30,  "Nombre", 0, 0, 'R');
        $this->SetFont('Arial', '', 15);
        $this->Cell(-1, 70, 'Titulo a mostrar en el curriculum', 0, 0, 'R');
        $this->Ln(55);
    }
    function contacto()
    {

        $this->SetFont('Arial', '', 10);
        $this->Cell(50, 20, "Celular", 0, 0, 'C');
        $this->Cell(-50, 30, "Correo", 0, 0, 'C');
        $this->Cell(50, 40, "Edad", 0, 0, 'C'); //utf8_decode(round(edad($datos[0]['fechanacimiento'])) . ' años')
        $this->SetXY(10, 90);
        $this->MultiCell(50, 5, 'Descripcion', 0, 'C', 0);

        $this->SetFont('Arial', '', 15);
        $this->Ln(55);
    }
    function cargarDatos()
    {
        $x = 70;
        $y = 90;
        $tope = 250;
        $this->SetXY(70, 70);
        $this->SetFont('Arial', 'B', 20);
        $this->Cell(130, 10, utf8_decode('Carreras profesionales'), 0, 0, 'L', 1);
        $this->SetFont('Arial', '', 10);
    }
}



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(212, 212, 212);

$pdf->contacto();
$pdf->cargarDatos();


$pdf->Output();
