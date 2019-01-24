<?php 
echo "pdf";

function split_pdf($nombrePdf, $dir=false)
{
	require_once('fpdf/fpdf.php');
	require_once('fpdi/fpdi.php');

	$dir = $dir ? $dir : './';
	$nombrePdf = $dir.$nombrePdf;
	$pdf = new FPDI();
	$pageCount = $pdf->setSourceFile($dir.$nombrePdf);

	// for ($i=1; $i < $pageCount+1; $i++) { 
	// 	$new_pdf = new FPDI();
	// 	$new_pdf->AddPage();
	// 	$new_pdf->setSourceFile($nombrePdf);
	// 	$new_pdf->useTemplate($new_pdf->importPage($i));

	// 	try {
	// 		$new_filename = $dir.str_replace('.pdf', '', $nombrePdf).'_'.$i.".pdf";
	// 		$new_pdf->output($new_filename,"F");
	// 		echo "Pagina ".$i." guardada en ".$new_filename."<br />\n";
	// 	} catch (Exception $e) {
	// 		echo "Hubo un error: ",$e->getMessage(), "\n";
	// 	}
	// }

	$docUnoNombre="Documento1";
	$docUnoInicio=1;
	$docUnoFinal=2;

	$docDosNombre="Documento2";
	$docDosInicio=3;
	$docDosFinal=3;

	$docTresNombre="Documento3";
	$docTresInicio=4;
	$docTresFinal=6;

	$docCuatroNombre="Documento4";
	$docCuatroInicio=7;
	$docCuatroFinal=7;

	$docCincoNombre="Documento5";
	$docCincoInicio=8;
	$docCincoFinal=9;


	// PRIMER DOCUMENTO
	$new_pdf = new FPDI();
	for ($i=$docUnoInicio; $i<=$docUnoFinal; $i++) { 
		// $new_pdf = new FPDI();
		$new_pdf->AddPage();
		$new_pdf->setSourceFile($nombrePdf);
		$new_pdf->useTemplate($new_pdf->importPage($i));
	}

	try {
		$new_filename = $dir.str_replace('.pdf', '', $docUnoNombre).".pdf";
		$new_pdf->output($new_filename,"F");
		echo "Documento ".$docUnoNombre." guardada en ".$new_filename."<br />\n";
	} catch (Exception $e) {
		echo "Hubo un error: ",$e->getMessage(), "\n";
	}


	// SEGUNDO DOCUMENTO
	$new_pdf = new FPDI();
	for ($i=$docDosInicio; $i<=$docDosFinal; $i++) { 
		// $new_pdf = new FPDI();
		$new_pdf->AddPage();
		$new_pdf->setSourceFile($nombrePdf);
		$new_pdf->useTemplate($new_pdf->importPage($i));
	}

	try {
		$new_filename = $dir.str_replace('.pdf', '', $docDosNombre).".pdf";
		$new_pdf->output($new_filename,"F");
		echo "Documento ".$docDosNombre." guardada en ".$new_filename."<br />\n";
	} catch (Exception $e) {
		echo "Hubo un error: ",$e->getMessage(), "\n";
	}



	// TERCER DOCUMENTO
	$new_pdf = new FPDI();
	for ($i=$docTresInicio; $i<=$docTresFinal; $i++) { 
		// $new_pdf = new FPDI();
		$new_pdf->AddPage();
		$new_pdf->setSourceFile($nombrePdf);
		$new_pdf->useTemplate($new_pdf->importPage($i));
	}

	try {
		$new_filename = $dir.str_replace('.pdf', '', $docTresNombre).".pdf";
		$new_pdf->output($new_filename,"F");
		echo "Documento ".$docTresNombre." guardada en ".$new_filename."<br />\n";
	} catch (Exception $e) {
		echo "Hubo un error: ",$e->getMessage(), "\n";
	}



	// CUARTO DOCUMENTO
	$new_pdf = new FPDI();
	for ($i=$docCuatroInicio; $i<=$docCuatroFinal; $i++) { 
		// $new_pdf = new FPDI();
		$new_pdf->AddPage();
		$new_pdf->setSourceFile($nombrePdf);
		$new_pdf->useTemplate($new_pdf->importPage($i));
	}

	try {
		$new_filename = $dir.str_replace('.pdf', '', $docCuatroNombre).".pdf";
		$new_pdf->output($new_filename,"F");
		echo "Documento ".$docCuatroNombre." guardada en ".$new_filename."<br />\n";
	} catch (Exception $e) {
		echo "Hubo un error: ",$e->getMessage(), "\n";
	}



	// QUINTO DOCUMENTO
	$new_pdf = new FPDI();
	for ($i=$docCincoInicio; $i<=$docCincoFinal; $i++) { 
		// $new_pdf = new FPDI();
		$new_pdf->AddPage();
		$new_pdf->setSourceFile($nombrePdf);
		$new_pdf->useTemplate($new_pdf->importPage($i));
	}

	try {
		$new_filename = $dir.str_replace('.pdf', '', $docCincoNombre).".pdf";
		$new_pdf->output($new_filename,"F");
		echo "Documento ".$docCincoNombre." guardada en ".$new_filename."<br />\n";
	} catch (Exception $e) {
		echo "Hubo un error: ",$e->getMessage(), "\n";
	}

}




split_pdf("documentos.pdf");



 ?>