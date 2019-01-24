<?php 
echo "pdf";

	require_once('fpdf/fpdf.php');
	require_once('fpdi/fpdi.php');

    // array to hold list of PDF files to be merged
    $imagenes = array( 	"nature6.jpg", 
				    	"nature8.jpg",
				    	"nature9.jpg"
				     );



	$pdf=new FPDF();

    foreach ($imagenes AS $imagen) {
		//Primera página
		$pdf->AddPage();
		$pdf->SetFont('Arial','',15);
		// $pdf->Cell(40,20);
		// $pdf->Write(5,'A continuación mostramos una imagen ');
		// $pdf->Image('img/'.$imagen , 4 ,4, '' , 200);
		$pdf->Image('img/'.$imagen , 4 ,4, 150);
		// $pdf->Image('img/'.$imagen , 5 ,5, 200 , 100,'JPG', 'http://www.desarrolloweb.com');

		// $pdf->Output();	
	}

	$output = $pdf->Output('./imagenes.pdf', 'F');
	return $output;
 ?>