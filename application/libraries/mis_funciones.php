<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mis_funciones {
    function limpia($var){
        $aux=$var[0]->idpregunta;
        $i=0;
        $format=array();
        $format[0]=$aux;
        foreach($var as $val){
            if($val->idpregunta!=$aux){
                $i++;
                $aux=$val->idpregunta;
                $format[$i]=$val->idpregunta;
            }
        }
        return $format;
    }
    function limpia2($var){
        $aux=$var[0]->cuest_id_verdura;
        $i=0;
        $format=array();
        $format[0]=$aux;
        foreach($var as $val){
            if($val->cuest_id_verdura!=$aux){
                $i++;
                $aux=$val->cuest_id_verdura;
                $format[$i]=$val->cuest_id_verdura;
            }
        }
        return $format;
    }

}