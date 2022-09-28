<?php

	require 'fpdf/fpdf.php';

  	$fpdf = new FPDF('P', 'mm', 'A4');

      class PDF extends FPDF
      
      {
          /*-- el encabezado ---*/
          
        public function Header()

        {
            $this->SetXY(20,15);
            $this->SetFont('Arial','B',9);

            
            //---------Encabezado obligatorio------
            $this->SetFont('Arial','B',9);
            $this->SetXY(20,12);
            $this->Cell(180,0,utf8_decode('ANEXO XVI / ANÁLISIS DE RIESGOS'),0,0,'R');
            $this->Ln(40);
            
        }
        
        /*-- pie de página ---*/
        
        public function footer()
        
        {
            $this->SetY(-15);
            $this->SetFont('Arial','B',8);
            $this->SetTextColor(23);
            $this->Cell(0,10,''  . $this->PageNo().'',0,0,'R');
            
        }
        
    }



?>