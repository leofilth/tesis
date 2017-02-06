<?php include "navs/nav_cuenta.php" ?>
<div class="container-fluid bg-im3 padingtop"style="padding-bottom: 100px">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img id="imagenUsuario" width="200px" height="200px"  class="img-circle center-block fondoavatar"
                     src="<?php
                     if($datos->avatar_name=="user")
                     {
                         if($datos->sexo=="masculino"){
                             echo base_url()."public/images/user_avatar/user-mas.png";
                         }else{
                             echo base_url()."public/images/user_avatar/user-fem.png";
                         }
                     }
                     else
                     {
                         echo base_url()."public/images/user_avatar/".$datos->avatar_name.".png";
                     }
                     ?>">
            </div>
            <div class="col-md-6">
                <h1 class="titulo1 animated jello">Hola <?php echo $datos->nick?></h1>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="animated infinite pulse">
                    <div class="instruccion-naranjo">
                        <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Consejo</h4>
                        <ol class="texto-modal-tip" id="descripcion-tip">
                            <li>Este es tu desafio diario</li>
                            <li>responde con cuidado</li>
                        </ol>
                    </div>
                    <div style="float: left;margin-left: 50px;clear: left">
                        <div class="triangulo-naranjo"></div>
                    </div>
                </div>
                <figure>
                    <img class="img-circle pull-left icon-inst" alt="estudiante1" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student1.png'?>">
                </figure>
            </div>
        </div>
    </div>
    <?php date_default_timezone_set('America/Argentina/Buenos_Aires');$fechaHoy=date("Y-m-d");
    if($desafioDatos->fecha_cuest != $fechaHoy){?>
        <?php echo $fechaHoy?>
        <div class="container cuadradosombracuest">
            <?php
            //para hacer name con nombre unico usando el id de la bd
            $num=1;
            foreach($preguntasDesafio as $pregunta){
                ?>
                <div class="row" style="margin-bottom: 15px">
                    <div class="col-md-6 col-md-offset-1">
                        <li style="list-style: none"><p class="preg-cuest"><?php echo "<span class='numerocuest'>".$num."</span>".".- ".$pregunta->pregunta?></p>
                            <ul style="list-style: none">
                                <li>
                                    <div class="radio">
                                        <label class="preg-cuest"><input name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta1?>" type="radio"> <?php echo $pregunta->respuesta1?></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio">
                                        <label class="preg-cuest"><input name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta2?>" type="radio"> <?php echo $pregunta->respuesta2?></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio">
                                        <label class="preg-cuest"><input name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta3?>" type="radio"> <?php echo $pregunta->respuesta3?></label>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <div id="monedas<?php echo $num?>"></div>
                    </div>
                    <div  class="col-md-4">
                        <div id="muestrarespuesta<?php echo $num?>" class="animated infinite pulse infocuest">
                            <div class="instruccion-morado">
                                <h4 id="correcto<?php echo $num?>" class="modal-title titulo-modal-tip">
                                    Elige una opción
                                </h4>
                                <p id="feedback<?php echo $num?>"></p>
                            </div>
                            <div style="float: left;margin-left: 50px;clear: left">
                                <div class="triangulo-morado"></div>
                            </div>
                        </div>
                        <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student4.png'?>">
                    </div>
                </div>
                <?php
                $num++;
            }?>
            <div class="container">
                <div class="titulo1" id="puntajeCuest">
                    Puntaje: <span id="puntaje"></span>
                    <img class="fondocoins" src="<?php echo base_url()."public/images/icons/coins.png"; ?>">
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <button  name="boton" id="verificacuestionario" class="btn  btn-info titulo4 center-block zoom">
                            Enviar Respuestas
                        </button>
                        <div class="col-md-6 col-md-offset-3" id="guardar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }else{?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div id="noguardado" class="alert alert-danger text-center">
                    Tu <strong>Desafío Diario</strong> ya ha sido respondido.
                    Vuelve mañana :D
                </div>
                <a id='volver' class='btn  btn-cf-submit titulo4 center-block zoom' href='<?php echo base_url().'aplicacion/cuenta'?>'>Volver</a>
            </div>
        </div>
    <?php }?>
</div>
<?php include "footer.php"?>
<script>
    $(document).ready(function() {
        function guardaFechaDesafioDiario(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
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

        var preguntas=<?php echo json_encode($preguntasDesafio,JSON_PRETTY_PRINT)?>;//arreglo de preguntas desde base de datos
        var preguntasVerdura=<?php echo json_encode($preguntasVerdura,JSON_PRETTY_PRINT)?>;
        var puntosBD=<?php echo $puntaje->puntos?>;//puntos que posee el usuario
        var puntajeLider=<?php echo $puntajeLider->puntaje?>;//puntaje total guardado en BD,para ranking lideres
        var fechaActual="<?php echo $fecha_actual?>";
        console.log(fechaActual);
        $("#verificacuestionario").on({
            click:function(){
                var i,cuest;
                var j=0;
                var puntaje=0;//puntaje para este cuestionario
                var respondido=false;
                var listo=true;
                var cuestionario=preguntas[0].idpregunta;//obtengo el id del cuestionario seleccionado.
                var cuestionarioVerdura=preguntasVerdura.idpregunta;
                for(i=1;i<preguntas.length+1;i++){
                     cuest=preguntas[i-1].idpregunta;
                    if($('input:radio[name='+cuest+i+']').is(':checked')) {
                        console.log(1);
                        $("#correcto"+i).text("Listo!");
                        $("#muestrarespuesta"+i).removeClass("infinite pulse");
                    }
                    else{
                        $("#correcto"+i).text("Selecciona una opción");
                        listo=false;
                    }
                }
                /*for(i=1;i<preguntas.length+1;i++){
                    if($('input:radio[name='+cuestionario+i+']').is(':checked')) {
                        $("#correcto"+i).text("Listo!");
                        $("#muestrarespuesta"+i).removeClass("hidden");
                    }
                    else{
                        $("#correcto"+i).text("Selecciona una opción");
                        $("#muestrarespuesta"+i).removeClass("hidden");
                        listo=false;
                    }
                }*/
                if(listo) {
                    for (i = 1; i < preguntas.length + 1; i++) {
                        //var aux='"'+(cuestionario+i).toString()+'"';
                        var aux = preguntas[i-1].idpregunta+i;
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
                                $("#monedas" + i).html("<div class='animated tada'><span class='titulo1'>+100</span> <img width='64px' height='64px'   src='<?php echo base_url().'public/images/icons/coin.png';?>'></div>");
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
                            respondido = false;
                        }
                    }
                }
                if(respondido){
                    $("#puntaje").text(puntaje);
                    $(".infocuest").removeClass("animated infinite pulse");
                    $("#puntajeCuest").addClass("animated infinite pulse");
                    $("#guardar").append("<a id='volver' class='btn  btn-info titulo4 center-block zoom' href='<?php echo base_url().'aplicacion/cuenta'?>'>Volver</a>");
                    $("#verificacuestionario").addClass("hidden");
                    var temp1=puntaje+puntosBD;
                    var temp2=puntaje+puntajeLider;
                    guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>',temp1);
                    guardaPuntajeLider('<?php echo base_url()."aplicacion/guardaPuntajeLider"?>',temp2);
                    guardaFechaDesafioDiario('<?php echo base_url()."aplicacion/guardaFechaDesafioDiario"?>',fechaActual);
                    temp1=0;
                    temp2=0;
                    //$("#guardarPuntos").addClass("hidden");
                    $("#volver").removeClass("hidden");
                    //$("#guardarPuntos").removeClass("hidden");
                }
            }
        });
        $("#imagenUsuario").on({
            mouseenter: function () {
                $(this).addClass(" animated rubberBand");
            },
            mouseleave: function () {
                $(this).removeClass("animated rubberBand");
            }
        });
        $(".efecto").on({
            mouseenter: function(){
                $(this).addClass("animated jello");
            },
            mouseleave:function() {
                $(this).removeClass("animated jello");
            }
        });
    });
</script>