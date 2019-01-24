<?php 
echo "pdf";

	require_once('fpdf/fpdf.php');
	require_once('fpdi/fpdi.php');

    // array to hold list of PDF files to be merged
    $files = array(
			    	"Documento1.pdf", 
			    	"Documento2.pdf", 
			    	"Documento3.pdf" );
    $pageCount = 0;
    // initiate FPDI
    $pdf = new FPDI();

    // iterate through the files
    foreach ($files AS $file) {
        // get the page count
        $pageCount = $pdf->setSourceFile($file);
        // iterate through all pages
        for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
            // import a page
            $templateId = $pdf->importPage($pageNo);
            // get the size of the imported page
            $size = $pdf->getTemplateSize($templateId);

            // create a page (landscape or portrait depending on the imported page size)
            if ($size['w'] > $size['h']) {
                $pdf->AddPage('L', array($size['w'], $size['h']));
            } else {
                $pdf->AddPage('P', array($size['w'], $size['h']));
            }

            // use the imported page
            $pdf->useTemplate($templateId);

            $pdf->SetFont('Helvetica');
            $pdf->SetXY(5, 5);
            $pdf->Write(8, 'Generated by FPDI');
        }
    }




	$output = $pdf->Output('./salida.pdf', 'F');
	return $output;
 ?>