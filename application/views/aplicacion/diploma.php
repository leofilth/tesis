<?php
$pdf = new Backgroundpdf('a4', 'landscape', 'image', array('img' => 'public/images/diploma.jpg'));
$pdf->setCurrentFont();
$pdf->ezSetDy(-150);
$pdf->ezText($datos->nombre, 50,array('justification'=>'center'));
ob_end_clean();
$pdf->ezStream();