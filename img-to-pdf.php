<?php 
ini_set('memory_limit', '-1');

echo "pdf";

	require_once('fpdf/fpdf.php');
	require_once('fpdi/fpdi.php');

    // AQUI ABAJO ESCRIBES LOS NOMBRE DE LOS IMAGENES EN ORDEN
    // CUANDO LOS TERMINES DE ESCRIBIR ACTUALIZAS LA PAGINA QUE DEJÉ ABIERTA
    $imagenes = array( 	
    					"portada 52 semanas de oracion.jpg", 
				    	"guia de oracion (pagina 2).jpg",
				    	"como usar esta guia (pagina 3).jpg",
				    	"metas muy radicales (pagina 4).jpg",
				    	"la oracion  (pagina 5).jpg",
				    	"lifeway (pagina 6).jpg",
				    	"lifeway (pagina 7).jpg",
				    	"semana 1.jpg",

				    	"semana 2.jpg",
				    	"semana 3.jpg",
				    	"semana 4.jpg",
				    	"semana 5.jpg",
				    	"semana 6.jpg",

				    	"semana 7.jpg",
				    	"semana 8.jpg",
				    	"semana 9.jpg",
				    	"semana 10.jpg",
				    	"semana 11.jpg",

				    	"semana 12.jpg",
				    	"semana 13.jpg",
				    	"semana 14.jpg",
				    	"semana 15.jpg",
				    	"semana 16.jpg",

				    	"semana 17.jpg",
				    	"semana 18.jpg",
				    	"semana 19.jpg",
				    	"semana 20.jpg",
				    	"semana 21.jpg",

				    	"semana 22.jpg",
				    	"semana 23.jpg",
				    	"semana 24.jpg",
				    	"mapa (pagina 32).jpg",
				    	"alcaldias (pagina 33).jpg",

				    	"semana 25.jpg",
				    	"semana 26.jpg",
				    	"semana 27.jpg",
				    	"semana 28.jpg",
				    	"semana 29.jpg",

				    	"semana 30.jpg",
				    	"semana 31.jpg",
				    	"semana 32.jpg",
				    	"semana 33.jpg",
				    	"semana 34.jpg",

				    	"semana 35.jpg",
				    	"semana 36.jpg",
				    	"semana 37.jpg",
				    	"semana 38.jpg",
				    	"semana 39.jpg",

				    	"semana 40.jpg",
				    	"semana 41.jpg",
				    	"semana 42.jpg",
				    	"semana 43.jpg",
				    	"semana 44.jpg",

				    	"semana 45.jpg",
				    	"semana 46.jpg",
				    	"semana 47.jpg",
				    	"semana 48.jpg",
				    	"semana 49.jpg",

				    	"semana 50.jpg",
				    	"semana 51.jpg",
				    	"semana 52.jpg",
				    	"nuestra vision pasion y mision (pagina 62).jpg",
				    	"creditos fotografias (pagina 63).jpg",
				    	"contraportada 52 semanas de oracion.jpg"
				     );



	$pdf=new FPDF();

    foreach ($imagenes AS $imagen) {
		//Primera página
		$pdf->AddPage();
		$pdf->SetFont('Arial','',15);
		// $pdf->Cell(40,20);
		// $pdf->Write(5,'A continuación mostramos una imagen ');
		// $pdf->Image('img/'.$imagen , 4 ,4, '' , 200);
		$pdf->Image('img/'.$imagen , 30 ,4, 150);
		// $pdf->Image('img/'.$imagen , 5 ,5, 200 , 100,'JPG', 'http://www.desarrolloweb.com');

		// $pdf->Output();	
	}

	$output = $pdf->Output('./todo.pdf', 'F');
	return $output;
 ?>