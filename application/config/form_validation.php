<?php
$config=array
(
    /*
     *Formulario
     */
    'aplicacion/registro'
    =>array(
        array('field'=>'nombre','label'=>'Nombre','rules'=>'required|is_string|trim'),
        array('field'=>'edad','label'=>'Edad','rules'=>'required|numeric|trim'),
        array('field'=>'ciudad','label'=>'Ciudad','rules'=>'is_string|required|trim'),
        array('field'=>'nick','label'=>'Nick','rules'=>'required|trim'),
        array('field'=>'password','label'=>'Contraseña','rules'=>'required|trim'),
    ),

);