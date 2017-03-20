<?php include "navs/nav_desafiodiario.php" ?>
<!-- Modal
            ayuda desafio diario
            -->
<div class="modal animated zoomIn" id="modaltip" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="background-color: #673AB7">
                <div class="tip-modal" id="instrumodal" style="cursor: pointer">
                    <div class="margen-modal">
                        <div class="texto-modal-tip" id="descripcion-tip">
                            <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Hola <?php echo $datos->nick?> este es tu Desafío diario</h4>
                            <div class="col-md-12" id="textoIns">
                                <p><span class="glyphicon glyphicon-ok"></span> Cada día podrás desafiar tus conocimientos.</p>
                                <p><span class="glyphicon glyphicon-ok"></span> Obten más monedas.</p>
                                <p><span class="glyphicon glyphicon-ok"></span> Se el primero en el ranking Wambo!</p>
                            </div>
                            <div class="col-md-12" id="fotoIns">
                                <img class="center-block tamano100"  src="<?php echo base_url()."public/images/icons/star2.png"?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="triangulo"></div>
                <br>
                <img class="img-circle icon-inst" src="<?php echo base_url().'public/images/modal/student2.png'?>">
                <div style="margin-top: 60px">
                    <button id="mostrarmodal" type="button" class="btn btn-danger" style="position:absolute;bottom:10px;left:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">No volver a mostar</button>
                    <button type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div>
</div>
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
                            <li>Revisa cada respuesta</li>
                            <li>Responde con cuidado</li>
                            <li>Responde todas las preguntas</li>
                        </ol>
                    </div>
                    <div style="float: left;margin-left: 50px;clear: left">
                        <div class="triangulo-naranjo"></div>
                    </div>
                </div>
                <figure>
                    <img class="img-border pull-left icon-inst" alt="estudiante1" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student1.png'?>">
                </figure>
            </div>
        </div>
    </div>
    <?php date_default_timezone_set("Chile/Continental");
    $fechaHoy=date("Y-m-d");
    //echo "La hora en Chile es: " . date ("H:i",time()) . "<br />";
    if($desafioDatos->fecha_cuest != $fechaHoy){?>
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
                                        <label class="preg-cuest"><input class="inputcuest" name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta1?>" type="radio"> <?php echo $pregunta->respuesta1?></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio">
                                        <label class="preg-cuest"><input class="inputcuest" name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta2?>" type="radio"> <?php echo $pregunta->respuesta2?></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio">
                                        <label class="preg-cuest"><input class="inputcuest" name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta3?>" type="radio"> <?php echo $pregunta->respuesta3?></label>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <div id="monedas<?php echo $num?>"></div>
                    </div>
                    <div  class="col-md-4">
                        <div id="muestrarespuesta<?php echo $num?>" class="animated infinite pulse infocuest">
                            <div id="instruccion<?php echo $num?>" class="instruccion-morado">
                                <h4 id="correcto<?php echo $num?>" class="modal-title titulo-modal-tip">
                                    Elige una opción
                                </h4>
                                <p id="feedback<?php echo $num?>" class="feedback"></p>
                            </div>
                            <div style="float: left;margin-left: 50px;clear: left">
                                <div id="flecha<?php echo $num?>" class="triangulo-morado"></div>
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
                        <button  name="boton" id="verificacuestionario" class="btn  btn-cuest titulo4 center-block zoom">
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
                <div class="instruefecto animated infinite pulse">
                    <div class="instruccion-morado">
                        <h4 id="titulo-tip" class="modal-title titulo-modal-tip">
                            Tu <strong>Desafío Diario</strong> ya ha sido respondido.
                            Vuelve mañana.
                        </h4>
                    </div>
                    <div style="float: left;margin-left: 45%;clear: left">
                        <div class="triangulo-morado"></div>
                    </div>
                </div>
                <figure>
                    <img class="img-responsive center-block" alt="estudiante1"  src="<?php echo base_url().'public/images/modal/sesion2.png'?>">
                </figure>
                <a id='volver' class='btn  btn-cuest titulo4 center-block zoom' href='<?php echo base_url().'aplicacion/cuenta'?>'>Volver</a>
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
        function guardaEstadoTutorial(ruta, valor) {
            $.post(ruta, {valor: valor}, function (resp) {
                return resp;
            })
        }

        var preguntas=<?php echo json_encode($preguntasDesafio,JSON_PRETTY_PRINT)?>;//arreglo de preguntas desde base de datos
        var puntosBD=<?php echo $puntaje->puntos?>;//puntos que posee el usuario
        var puntajeLider=<?php echo $puntajeLider->puntaje?>;//puntaje total guardado en BD,para ranking lideres
        var fechaActual="<?php echo $fecha_actual?>";
        var tutorial =<?php echo json_encode($tutorial,JSON_PRETTY_PRINT)?>;
        var mostrar = tutorial.desafio_diario;

        $("#mostrarmodal").click(function () {
            mostrar = 0;
            //guarda en bd
            guardaEstadoTutorial('<?php echo base_url()."aplicacion/guardaEstadoTutorialDesafioDiario"?>', mostrar);
        });
        $(window).load(function () {
            if (mostrar == 1) {
                $('#modaltip').modal('show');
            }
        });
        $(".inputcuest").on({
            click:function() {
                var i,cuest;
                for(i=1;i<preguntas.length+1;i++){
                    cuest=preguntas[i-1].idpregunta;
                    if($('input:radio[name='+cuest+i+']').is(':checked')) {
                        console.log(1);
                        $("#correcto"+i).text("Listo!");
                        $("#muestrarespuesta"+i).removeClass("infinite pulse");
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
                var i,cuest;
                var j=0;
                var puntaje=0;//puntaje para este cuestionario
                var respondido=false;
                var listo=true;
                var cuestionario=preguntas[0].idpregunta;//obtengo el id del cuestionario seleccionado.
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