<?php include "navs/nav_cuest_fruta.php" ?>
<section class="container-fluid bg-im3 padingtop">
    <div class="container">
        <header class="titulo1 text-center">Bienvenido a Cuestionarios</header>
        <?php if($cuestRespondidos == null){?>
            <?php include "cuestionarios/cuestFrut.php"?>
        <?php }
        else {?>
            <?php
            $cuestResp=$this->mis_funciones->limpiaTres($cuestRespondidos);
            if(in_array($cuestionario->cuesttemp,$cuestResp)){?>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div id="noguardado" class="alert alert-danger text-center">
                            Este <strong>Cuestionario</strong> ya ha sido respondido.
                        </div>
                        <a id='volver' class='btn  btn-cf-submit titulo4 center-block zoom' href='<?php echo base_url().'aplicacion/frutas'?>'>Volver</a>
                    </div>
                </div>
            <?php }
            else {?>
                <?php include "cuestionarios/cuestFrut.php"?>
            <?php }
         }?>
    </div>
</section>
<?php include "footer.php"?>
<script>
    $(document).ready(function() {
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
        var puntajeLider=<?php echo $puntajeLider->puntaje?>;//puntaje total guardado en BD,para ranking lideres
        $("#verificacuestionario").on({
            click:function(){
                var i;
                var j=0;
                var puntaje=0;//puntaje para este cuestionario
                var respondido=false;
                var listo=true;
                var cuestionario=preguntas[0].idpregunta;//obtengo el id del cuestionario seleccionado.
                for(i=1;i<preguntas.length+1;i++){
                    if($('input:radio[name='+cuestionario+i+']').is(':checked')) {
                        $("#correcto"+i).text("Listo!");
                        $("#muestrarespuesta"+i).removeClass("hidden");
                    }
                    else{
                        $("#correcto"+i).text("Selecciona una opción");
                        $("#muestrarespuesta"+i).removeClass("hidden");
                        listo=false;
                    }
                }
                if(listo) {
                    for (i = 1; i < preguntas.length + 1; i++) {
                        //var aux='"'+(cuestionario+i).toString()+'"';
                        var aux = cuestionario + i;
                        /*Comprueba que se selecciona un input
                         * */
                        if ($('input:radio[name=' + aux + ']').is(':checked')) {
                            if ($('input:radio[name=' + aux + ']:checked').val() == preguntas[j].respcorrecta) {
                                //console.log(aux);
                                j++;
                                puntaje = puntaje + 100;
                                $("#correcto" + i).html("Correcto! <span class='glyphicon glyphicon-ok'></span>");
                                /*Posible feeedback al usuario, en la respuesta*/
                                $("#feedback" + i).text("feedback");
                                $("#monedas" + i).html("<span class='titulo1'>+100</span> <img width='64px' height='64px'   src='<?php echo base_url().'public/images/icons/coin.png';?>'>");
                                $("#muestrarespuesta" + i).removeClass("hidden");
                                respondido = true;
                            }
                            else {
                                $("#correcto" + i).html("Incorrecto <span class='glyphicon glyphicon-remove'></span>");
                                $("#muestrarespuesta" + i).removeClass("hidden");
                                respondido = true;
                            }
                        } else {
                            $("#correcto" + i).text("Selecciona una opción");
                            $("#muestrarespuesta" + i).removeClass("hidden");
                            respondido = false;
                        }
                    }
                }
                if(respondido){
                    $("#puntaje").text(puntaje);
                    //$('"#'+cuestionario+'"').removeClass("hidden");
                    var cuestionario="<?php echo $cuestionario->cuesttemp?>";
                    guardaCuestionario('<?php echo base_url()."aplicacion/guardaCuestFrut"?>',cuestionario);
                    $("#guardar").append("<a id='volver' class='btn  btn-info titulo4 center-block zoom' role='button' href='<?php echo base_url().'aplicacion/frutas#section2'?>'>Volver</a>");
                    $("#verificacuestionario").addClass("hidden");
                    var temp1=puntaje+puntosBD;
                    var temp2=puntaje+puntajeLider;
                    guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>',temp1);
                    guardaPuntajeLider('<?php echo base_url()."aplicacion/guardaPuntajeLider"?>',temp2);
                    //$("#noguardado").removeClass("alert-danger");
                    //$("#noguardado").addClass("alert-info");
                    //$("#noguardado").text("Puntaje Guardado!");
                    temp1=0;
                    temp2=0;
                    //$("#guardarPuntos").addClass("hidden");
                    $("#volver").removeClass("hidden");
                    //$("#guardarPuntos").removeClass("hidden");
                }
            }
        });
        })
</script>