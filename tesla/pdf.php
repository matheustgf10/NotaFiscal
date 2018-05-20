<?php 
	include("includes/pdf/src/Cezpdf.php");


	$pdf = new Cezpdf();	

	$pdf->selectFont('pdf-php/fonts/Helvetica.afm');

	// $pdf->ezText('DevMedia Group!', 20, array(justification => 'center', spacing => 2.0)); 
 //   	$pdf->ezText('Olá Pessoal. Obrigado por estarem acompanhando mais este artigo!', 15, array(justification => 'left', spacing => 3.0));
 //   	$pdf->ezText('Acessem o portal da DevMedia Group: www.devmedia.com.br!', 10, array(justification => 'right', spacing => 1.0));
 //   	$pdf->ezText("<br />___________________________<br />", 20, array(justification => 'center', spacing => 1.0));

   	$data = array(
 array('num' => 1, 'name' => 'gandalf', 'type' => 'wizard'), array('num' => 2, 'name' => 'bilbo', 'type' => 'hobbit', 'url' => 'http://www.ros.co.nz/pdf/'), array('num' => 3, 'name' => 'frodo', 'type' => 'hobbit'), array('num' => 4, 'name' => 'saruman', 'type' => 'bad dude', 'url' => 'http://sourceforge.net/projects/pdf-php'), array('num' => 5, 'name' => 'sauron', 'type' => 'really bad dude'),
);
   	$cols = array('num' => 'No', 'type' => 'Type', 'name' => '<i>Alias</i>');
$coloptions = array('num' => array('justification' => 'right'), 'name' => array('justification' => 'left'), 'type' => array('justification' => 'center'));

   	$pdf->ezTable($data, $cols, '', array('shadeHeadingCol' => array(0.4, 0.6, 0.6), 'width' => 600));

   $pdf->ezStream();
 ?>