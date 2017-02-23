<?php include "navs/nav_cuest_verdura.php" ?>
<section class="container-fluid bg-im3 padingtop padingbot">
    <div class="container">
        <header class="titulo1 text-center">Bienvenido a Cuestionarios</header>
        <?php if($cuestRespondidos == null){?>
            <?php include "cuestionarios/cuestVerd.php"?>
        <?php }
        else {?>
            <?php
            $cuestResp=$this->mis_funciones->limpiaDos($cuestRespondidos);
            if(in_array($cuestionario,$cuestResp)){?>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div id="noguardado" class="alert alert-danger text-center">
                            Este <strong>Cuestionario</strong> ya ha sido respondido.
                        </div>
                        <a id='volver' class='btn  btn-cf-submit titulo4 center-block zoom' href='<?php echo base_url().'aplicacion/verduras'?>'>Volver</a>
                    </div>
                </div>
            <?php }
            else {?>
                <?php include "cuestionarios/cuestVerd.php"?>
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
        function actualizaAvance(ruta,valor1,valor2){
            $.post(ruta,{valor1:valor1,valor2:valor2},function(resp){
                return resp;
            })
        }
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
        var preguntas=<?php echo json_encode($preguntasVerdura,JSON_PRETTY_PRINT)?>;//arreglo de preguntas desde base de datos
        var puntosBD=<?php echo $puntaje->puntos?>;//puntos que posee el usuario
        var puntajeLider=<?php echo $puntajeLider->puntaje?>;//puntaje total guardado en BD,para ranking lideres
        var avance=<?php echo $avance->avance_cuest_verdura?>;
        $(".inputcuest").on({
            click:function() {
                var i;
                var cuestionario = preguntas[0].idpregunta;//obtengo el id del cuestionario seleccionado.
                for (i = 1; i < preguntas.length + 1; i++) {
                    if ($('input:radio[name=' + cuestionario + i + ']').is(':checked')) {
                        $("#correcto" + i).text("Listo!");
                        $("#muestrarespuesta" + i).removeClass("infinite pulse");
                        $("#instruccion"+i).removeClass("instruccion-morado");
                        $("#instruccion"+i).addClass("instruccion-naranjo");
                        $("#flecha"+i).removeClass("triangulo-morado");
                        $("#flecha"+i).addClass("triangulo-naranjo");
                    }

                }
            }
        });
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
                        $("#muestrarespuesta"+i).removeClass("infinite pulse");
                    }
                    else{
                        $("#correcto"+i).text("Selecciona una opción");
                        //$("#muestrarespuesta"+i).removeClass("hidden");
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
                                puntaje = puntaje + 100;
                                $("#correcto" + i).html("Correcto! <span class='glyphicon glyphicon-ok'></span>");
                                /*Posible feeedback al usuario, en la respuesta*/
                                $("#feedback" + i).text(preguntas[j].feedback);
                                j++;
                                $("#monedas" + i).html("<span class='titulo1'>+100</span> <img width='64px' height='64px'   src='<?php echo base_url().'public/images/icons/coin.png';?>'>");
                                respondido = true;
                            }
                            else {
                                $("#correcto" + i).html("Incorrecto <span class='glyphicon glyphicon-remove'></span>");
                                respondido = true;
                                $("#feedback" + i).text(preguntas[j].feedback);
                                j++;
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
                    $(".infocuest").removeClass("animated infinite pulse");
                    $("#puntajeCuest").addClass("animated infinite pulse");
                    var cuestionario="<?php echo $cuestionario?>";
                    guardaCuestionario('<?php echo base_url()."aplicacion/guardaCuestVerd"?>',cuestionario);
                    avance++;
                    actualizaAvance('<?php echo base_url()."aplicacion/actualizaAvance"?>',avance,"cuestVerdura");
                    $("#guardar").append("<a id='volver' class='btn  btn-info titulo4 center-block zoom' href='<?php echo base_url().'aplicacion/verduras#section2'?>'>Volver</a>");
                    $("#verificacuestionario").addClass("hidden");
                    var temp1=puntaje+puntosBD;
                    var temp2=puntaje+puntajeLider;
                    guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>',temp1);
                    guardaPuntajeLider('<?php echo base_url()."aplicacion/guardaPuntajeLider"?>',temp2);
                    temp1=0;
                    temp2=0;
                    $("#volver").removeClass("hidden");
                }
            }
        });
        $(".icon-inst").on({
            mouseenter: function(){
                $(this).addClass("animated jello");
            },
            mouseleave:function(){
                $(this).removeClass("animated jello");
            }
        });
    })
</script>
