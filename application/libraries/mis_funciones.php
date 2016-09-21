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
    function limpiaDos($var){
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
    function limpiaTres($var){
        $aux=$var[0]->cuest_id_fruta;
        $i=0;
        $format=array();
        $format[0]=$aux;
        foreach($var as $val){
            if($val->cuest_id_fruta!=$aux){
                $i++;
                $aux=$val->cuest_id_fruta;
                $format[$i]=$val->cuest_id_fruta;
            }
        }
        return $format;
    }
    function limpiaCuatro($var){
        $aux=$var[0]->cuest_id_alimento;
        $i=0;
        $format=array();
        $format[0]=$aux;
        foreach($var as $val){
            if($val->cuest_id_alimento!=$aux){
                $i++;
                $aux=$val->cuest_id_alimento;
                $format[$i]=$val->cuest_id_alimento;
            }
        }
        return $format;
    }
    function limpiaCinco($var){
        $aux=$var[0]->id;
        $i=0;
        $format=array();
        $format[0]=$aux;
        foreach($var as $val){
            if($val->id!=$aux){
                $i++;
                $aux=$val->id;
                $format[$i]=$val->id;
            }
        }
        return $format;
    }
    function limpiaSeis($var){
        $aux=$var[0]->id_receta_fk;
        $i=0;
        $format=array();
        $format[0]=$aux;
        foreach($var as $val){
            if($val->id_receta_fk!=$aux){
                $i++;
                $aux=$val->id_receta_fk;
                $format[$i]=$val->id_receta_fk;
            }
        }
        return $format;
    }
}