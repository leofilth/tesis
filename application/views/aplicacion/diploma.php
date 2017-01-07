<?php
if($estadoDiploma->valor_fruta==1 and $estadoDiploma->valor_verdura==1
    and $estadoDiploma->valor_alimento==1 and $estadoDiploma->valor_deporte==1){
    /*
 * Crea el pdf para el usuario
 */
    $pdf = new Backgroundpdf('a4', 'landscape', 'image', array('img' => 'public/images/diplomaV2.jpg'));
    $pdf->setCurrentFont();
    $pdf->ezSetDy(-150);
    $str = utf8_decode($datos->nombre);
    $pdf->ezText($str, 50,array('justification'=>'center'));
//$pdf->ezText($datos->nombre, 50,array('justification'=>'center'));
    ob_end_clean();
    $pdf->ezStream();
    /*
     * Fin crea pdf usuario
     */
}else{
    /*
 * Crea el pdf example para el usuario
 */
    $pdf = new Backgroundpdf('a4', 'landscape', 'image', array('img' => 'public/images/diplomaExample.jpg'));
    $pdf->setCurrentFont();
    $pdf->ezSetDy(-150);
    $str = utf8_decode($datos->nombre);
    $pdf->ezText($str, 50,array('justification'=>'center'));
//$pdf->ezText($datos->nombre, 50,array('justification'=>'center'));
    ob_end_clean();
    $pdf->ezStream();
    /*
     * Fin crea pdf usuario
     */
}
