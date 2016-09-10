<?php include "navs/nav_cuenta.php"?>
<div class="container-fluid bg-im3">
    <div class="container">
        <header class="titulo4 text-center">Bienvenido a Cuestionarios</header>
        <?php if($cuestRespondidos == null){?>
            <?php include "cuestionarios/cuestFrut.php"?>
        <?php }
        else {?>
            <?php
            $cuestResp=$this->mis_funciones->limpiaTres($cuestRespondidos);
            if(in_array($cuestionario,$cuestResp)){?>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p>ya respondido</p>
                        <a id='volver' class='btn  btn-cf-submit titulo4 center-block zoom' href='<?php echo base_url().'aplicacion/verduras'?>'>Volver</a>
                    </div>
                </div>
            <?php }
            else {?>
                <?php include "cuestionarios/cuestFrut.php"?>
            <?php }?>
        <?php }?>
    </div>
</div>
<?php include "footer.php"?>
<script>
    /**
     * $('input[name=Choose]').attr('checked',false); //limpia el input
     */
    function guardaCuestionario(ruta,valor1){
        $.post(ruta,{valor1:valor1},function(resp)
        {
            return resp;
        });
    }
    function guardaPuntaje(ruta,valor){
        $.post(ruta,{valor:valor},function(resp){
            return resp;
        })
    }
    function guardaPuntajeLider(ruta,valor){
        $.post(ruta,{valor:valor},function(resp){
            return resp;
        })
    }
    var texto="<?php echo $preguntasFruta[0]->idpregunta?>";
    var preguntas=<?php echo json_encode($preguntasFruta,JSON_PRETTY_PRINT)?>;//arreglo de preguntas desde base de datos
    var puntosBD=<?php echo $puntaje->puntos?>;//puntos que posee el usuario
    var puntaje=0;//puntaje para este cuestionario
    var puntajeLider=<?php echo $puntajeLider->puntaje?>;//puntaje total guardado en BD,para ranking lideres
    $("#verificacuestionario").on({
        click:function(){
            var i;
            var j=0;
            var cuestionario=preguntas[0].idpregunta;//obtengo el id del cuestionario seleccionado.
            for(i=1;i<preguntas.length+1;i++){
                //var aux='"'+(cuestionario+i).toString()+'"';
                var aux=cuestionario+i;
                /*Comprueba que se selecciona un input
                 * */
                if($('input:radio[name='+aux+']').is(':checked')) {
                    if($('input:radio[name='+aux+']:checked').val()==preguntas[j].respcorrecta){
                        //console.log(aux);
                        j++;
                        puntaje=puntaje+100;
                        $("#correcto"+i).text("correcto");
                        /*Posible feeedback al usuario, en la respuesta*/
                    }
                    else{
                        $("#correcto"+i).text("incorrecto");
                    }
                } else {
                    //alert("No está activado");
                    $("#correcto"+i).text("Seleccione una opción");
                }
            }
            $("#puntaje").text(puntaje);
            //$('"#'+cuestionario+'"').removeClass("hidden");
            var cuestionario="<?php echo $cuestionario?>";
            guardaCuestionario('<?php echo base_url()."aplicacion/guardaCuestFrut"?>',cuestionario);
            $("#guardar").append("<a id='volver' class='btn  hidden btn-cf-submit titulo4 center-block zoom' href='<?php echo base_url().'aplicacion/frutas'?>'>Volver</a>");
            $("#verificacuestionario").addClass("hidden");
            var temp1=puntaje+puntosBD;
            var temp2=puntaje+puntajeLider;
            guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>',temp1);
            guardaPuntajeLider('<?php echo base_url()."aplicacion/guardaPuntajeLider"?>',temp2);
            $("#noguardado").text("Puntaje Guardado!");
            temp1=0;
            temp2=0;
            //$("#guardarPuntos").addClass("hidden");
            $("#volver").removeClass("hidden");
            //$("#guardarPuntos").removeClass("hidden");
        }
    });

    /*$("#guardarPuntos").on({
     click: function () {
     var temp1=puntaje+puntosBD;
     var temp2=puntaje+puntajeLider;
     guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>',temp1);
     guardaPuntajeLider('<?php echo base_url()."aplicacion/guardaPuntajeLider"?>',temp2);
     $("#noguardado").text("Puntaje Guardado!");
     temp1=0;
     temp2=0;
     $("#guardarPuntos").addClass("hidden");
     $("#volver").removeClass("hidden");
     }
     });*/
</script>