<?php include "navs/nav_cuenta.php" ?>
<!-- Modal
            Tutorial Wambo
            -->
<div class="modal animated zoomIn" id="modaltip" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="background-color: #673AB7">
                <div class="tip-modal" id="instrumodal" style="cursor: pointer">
                    <div class="margen-modal">
                        <div class="texto-modal-tip" id="descripcion-tip">
                            <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Hola <?php echo $datos->nick?>, así funciona Wambo</h4>
                            <div class="col-md-12" id="textoIns">
                                <span class="glyphicon glyphicon-ok"></span> Haz click en el cuadro verde para siguiente ayuda
                            </div>
                            <div class="col-md-12" id="fotoIns">
                                <img class="center-block tamano100"  src="<?php echo base_url()."public/images/icons/customer-service.png"?>">
                            </div>
                        </div>
                    </div>
                    <img class="icon-click animated infinite flash" src="<?php echo base_url()."public/images/icons/click.png"?>">
                </div>
                <div class="triangulo"></div>
                <br>
                <img class="img-circle icon-inst" src="<?php echo base_url().'public/images/modal/student2.png'?>">
                <div style="margin-top: 60px">
                    <button id="mostrarmodal" type="button" class="btn btn-info" style="position:absolute;bottom:10px;left:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">No volver a mostar</button>
                    <button type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <section class="container-fluid bg-im3"style="padding-bottom: 100px;padding-top: 80px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img id="imagenUsuario" width="200px" height="200px"  class="img-circle center-block fondoavatar animated"
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
                    <?php if($datos->sexo == "masculino"){?>
                    <h1 class="titulo1 animated tada">Bienvenido <?php echo $datos->nick?></h1>
                    <?php }else{?>
                    <h1 class="titulo1 animated tada">Bienvenida <?php echo $datos->nick?></h1>
                    <?php }?>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <div class="cuadradotarjeta4 animated infinite pulse tipmain">
                            <div class="row">
                                <div class="col-md-4 col-xs-4">
                                    <img width="70" height="70" class="zoom center-block animated flash" src="<?php echo base_url()."public/images/icons/bulb.png"?>">
                                </div>
                                <div class="col-md-8 col-xs-8">
                                    <p class="descp-tarjeta text-center">¿Sabías qué?</p>
                                    <p class="descp-tarjeta text-center"><?php  echo $tip->descripcion?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="titulo1 text-center">Selecciona que quieres aprender</h3>
        <div class="container animated bounceIn">
            <div class="row">
                <div class="col-md-12">
                    <div id="fruta" class="col-md-4 col-sm-6">
                        <div class=" text-center borde frutacuenta">
                            <?php if($estadoDiploma->valor_fruta==1){?>
                            <figure>
                                <img id="portadafruta" class="img-circle center-block img-seccion" src="<?php echo base_url()."public/images/portada1medalla.png"?>">
                            </figure>
                            <?php }else{?>
                                <figure>
                                    <img id="portadafruta" class="img-circle center-block img-seccion" src="<?php echo base_url()."public/images/portada1m.png"?>">
                                </figure>
                            <?php }?>
                            <div class="maintitulo">
                                <h3 id="tfrut">
                                    Frutas
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round((($avance->avance_fruta+$avance->avance_cuest_fruta)*100)/($totalFrutas+$totalCuestFruta))?>%">
                                            <span id="avanceFruta">
                                                <?php echo round((($avance->avance_fruta+$avance->avance_cuest_fruta)*100)/($totalFrutas+$totalCuestFruta))?>
                                            </span>%
                                        </div>
                                    </div>
                                </h3>
                            </div>
                            <a href="<?php echo base_url()."aplicacion/frutas"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="verdura" class="col-md-4 col-sm-6">
                        <div class=" text-center borde  verduracuenta">
                            <?php if($estadoDiploma->valor_verdura==1){?>
                                <figure>
                                    <img id="portadaverdura" class="img-circle center-block img-seccion" src="<?php echo base_url()."public/images/portada2medalla.png"?>">
                                </figure>
                            <?php }else{?>
                                <figure>
                                    <img id="portadaverdura" class="img-circle center-block img-seccion" src="<?php echo base_url()."public/images/portada2m.png"?>">
                                </figure>
                            <?php }?>
                            <div class="maintitulo">
                                <h3 id="tverd">
                                    Verduras
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round((($avance->avance_verdura+$avance->avance_cuest_verdura)*100)/($totalVerduras+$totalCuestVerdura))?>%">
                                            <span id="avanceVerdura">
                                                <?php echo round((($avance->avance_verdura+$avance->avance_cuest_verdura)*100)/($totalVerduras+$totalCuestVerdura))?>
                                            </span>%
                                        </div>
                                    </div>
                                </h3>
                            </div>
                            <a href="<?php echo base_url()."aplicacion/verduras"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="alimento" class="col-md-4 col-sm-6">
                        <div class="text-center borde  alimentocuenta">
                            <?php if($estadoDiploma->valor_alimento==1){?>
                                <figure>
                                    <img id="portadaalimento" class="img-circle center-block img-seccion" src="<?php echo base_url()."public/images/portada5medalla.png"?>">
                                </figure>
                            <?php }else{?>
                                <figure>
                                    <img id="portadaalimento" class="img-circle center-block img-seccion" src="<?php echo base_url()."public/images/portada5m.png"?>">
                                </figure>
                            <?php }?>
                            <div class="maintitulo">
                                <h3 id="tali">
                                    Alimentos
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round((($avance->avance_alimento+$avance->avance_cuest_alimento)*100)/($totalAlimentos+$totalCuestAlimento))?>%">
                                            <span id="avanceAlimento">
                                                <?php echo round((($avance->avance_alimento+$avance->avance_cuest_alimento)*100)/($totalAlimentos+$totalCuestAlimento))?>
                                            </span>%
                                        </div>
                                    </div>
                                </h3>
                            </div>
                            <!--<p class="descp-tarjeta">Todo sobre los alimentos</p>-->
                            <a href="<?php echo base_url()."aplicacion/alimentos"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="deporte" class="col-md-4 col-sm-6">
                        <div class="text-center  borde deportecuenta">
                            <?php if($estadoDiploma->valor_deporte==1){?>
                                <figure>
                                    <img id="portadadeporte" class="img-circle center-block img-seccion" src="<?php echo base_url()."public/images/portada3medalla.png"?>">
                                </figure>
                            <?php }else{?>
                                <figure>
                                    <img id="portadadeporte" class="img-circle center-block img-seccion" src="<?php echo base_url()."public/images/portada3m.png"?>">
                                </figure>
                            <?php }?>
                            <div class="maintitulo">
                                <h3 id="tdep">
                                    Ed. Física
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round((($avance->avance_deporte+$avance->avance_cuest_deporte)*100)/($totalDeportes+$totalCuestDeporte))?>%">
                                            <span id="avanceDeporte">
                                               <?php echo round((($avance->avance_deporte+$avance->avance_cuest_deporte)*100)/($totalDeportes+$totalCuestDeporte))?>
                                            </span>%
                                        </div>
                                    </div>
                                </h3>
                            </div>
                            <a href="<?php echo base_url()."aplicacion/deporte"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="micertificado" class="col-md-4  col-sm-6">
                        <div class=" text-center  borde noticiacuenta">
                            <img id="portadacertificado" class="img-circle center-block img-seccion" src="<?php echo base_url()."public/images/portada7.png"?>">
                            <div class="maintitulo">
                                <h3 id="tcert">Mi Diploma</h3>
                            </div>
                            <a href="<?php echo base_url()."aplicacion/certificado"?>" class="btn-cuenta titulo5 center-block zoom">Ir</a>
                        </div>
                    </div>
                    <!--<div id="receta" class="col-md-4 col-sm-6">
                        <div class="text-center  borde recetacuenta">
                            <img id="portadareceta" class="img-circle center-block img-seccion" src="<?php echo base_url()."public/images/portada4.jpg"?>">
                            <div class="maintitulo">
                                <h3 id="trec">
                                    Mis recetas
                                </h3>
                            </div>
                            <a href="<?php echo base_url()."aplicacion/receta"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>-->
                    <div id="noticias" class="col-md-4 col-sm-6">
                        <div class=" text-center  borde noticiacuenta">
                            <img id="portadanoticia"  class="img-circle center-block img-seccion" src="<?php echo base_url()."public/images/portada6m.png"?>">
                            <div class="maintitulo">
                                <h3 id="tnot">Noticias</h3>
                            </div>
                            <a href="<?php echo base_url()."aplicacion/noticias"?>" class="btn-cuenta titulo5 center-block zoom">Ir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="container">
            <div class="row">
                <div id="fruta" class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class=" text-center  borde noticiacuenta">
                        <img id="portadafruta" class="img-circle center-block img-seccion" src="<?php echo base_url()."public/images/portada1.png"?>">
                        <div class="maintitulo">
                            <h3 id="tfrut">Mi certificado</h3>
                        </div>
                        <a href="<?php echo base_url()."aplicacion/certificado"?>" class="btn-cuenta titulo5 center-block zoom">Ir</a>
                    </div>
                </div>
            </div>
        </div>-->
    </section>
<?php include "footer.php"?>
<script>
    $(document).ready(function() {
        /**
         *Si una seccion esta completa enviar a BD
         * */
        function guardaSeccionCompletada(ruta,valor){
            $.post(ruta, {valor: valor}, function (resp) {
                return resp;
            })
        }
        function guardaEstadoTutorial(ruta, valor) {
            $.post(ruta, {valor: valor}, function (resp) {
                return resp;
            })
        }
        var avanceFruta=$("#avanceFruta").text();
        var avanceVerdura=$("#avanceVerdura").text();
        var avanceAlimento=$("#avanceAlimento").text();
        var avanceDeporte=$("#avanceDeporte").text();
        var tutorial =<?php echo json_encode($tutorial,JSON_PRETTY_PRINT)?>;
        var estadoDiploma=<?php echo json_encode($estadoDiploma,JSON_PRETTY_PRINT)?>;
        var mostrar = tutorial.cuenta;
        if(avanceFruta==100) {
            /*
             si ya agregó una vez no volver hacerlo.
             */
            if (estadoDiploma.valor_fruta != 1) {
                guardaSeccionCompletada('<?php echo base_url()."aplicacion/guardaSeccionCompleta"?>', "fruta");
            }
        }
        if(avanceVerdura==100){
            if(estadoDiploma.valor_verdura!=1){
                guardaSeccionCompletada('<?php echo base_url()."aplicacion/guardaSeccionCompleta"?>',"verdura");
            }
        }
        if(avanceDeporte==100){
            if(estadoDiploma.valor_deporte!=1) {
                guardaSeccionCompletada('<?php echo base_url()."aplicacion/guardaSeccionCompleta"?>', "deporte")
            }
        }
        if(avanceAlimento==100){
            if(estadoDiploma.valor_alimento!=1) {
                guardaSeccionCompletada('<?php echo base_url()."aplicacion/guardaSeccionCompleta"?>', "alimento")
            }
        }
        $("#mostrarmodal").click(function () {
            mostrar = 0;
            //guarda en bd
            guardaEstadoTutorial('<?php echo base_url()."aplicacion/guardaEstadoTutorial"?>', mostrar);
        });
        $(window).load(function () {
            if (mostrar == 1) {
                $('#modaltip').modal('show');
            }
        });

        $("#fruta").on({
            mouseenter: function () {
                $("#portadafruta").addClass("borde animated pulse");
                $("#tfrut").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadafruta").removeClass("borde animated pulse");
                $("#tfrut").css("color", "white");
            }
        });
        $("#verdura").on({
            mouseenter: function () {
                $("#portadaverdura").addClass("borde animated pulse");
                $("#tverd").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadaverdura").removeClass("borde animated pulse");
                $("#tverd").css("color", "white");
            }
        });
        $("#alimento").on({
            mouseenter: function () {
                $("#portadaalimento").addClass("borde animated pulse");
                $("#tali").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadaalimento").removeClass("borde animated pulse");
                $("#tali").css("color", "white");
            }
        });
        $("#receta").on({
            mouseenter: function () {
                $("#portadareceta").addClass("borde");
                $("#trec").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadareceta").removeClass("borde");
                $("#trec").css("color", "white");
            }
        });
        $("#deporte").on({
            mouseenter: function () {
                $("#portadadeporte").addClass("borde animated pulse");
                $("#tdep").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadadeporte").removeClass("borde animated pulse");
                $("#tdep").css("color", "white");
            }
        });
        $("#micertificado").on({
            mouseenter: function () {
                $("#portadacertificado").addClass("borde animated pulse");
                $("#tcert").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadacertificado").removeClass("borde animated pulse");
                $("#tcert").css("color", "white");
            }
        });
        $("#noticias").on({
            mouseenter: function () {
                $("#portadanoticia").addClass("borde animated pulse");
                $("#tnot").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadanoticia").removeClass("borde animated pulse");
                $("#tnot").css("color", "white");
            }
        });
        /**
         * Instrucciones
         * @type {*[]}
         */
        var instrucciones = [
            {
                "titulo": "<span class='glyphicon glyphicon-ok'></span> Haz click en el cuadro verde para siguiente ayuda",
                "imagen": "<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/customer-service.png'?>'>"
            },
            {
                "titulo": "<span class='glyphicon glyphicon-ok'></span> Elije tu sección: Frutas, Verduras, Deporte y Alimentos",
                "imagen": "<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/tuto1.png'?>'>"
            },
            {
                "titulo": "<span class='glyphicon glyphicon-ok'></span> Supera los desafíos y gana monedas",
                "imagen": "<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/tuto2.png'?>'>"
            },
            {
                "titulo": "<span class='glyphicon glyphicon-ok'></span> Canjea tus monedas por alimentos y deportes",
                "imagen": "<img  class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/tuto3.png'?>'>"
            },
            {
                "titulo": "<span class='glyphicon glyphicon-ok'></span> Aprende y obten tu certificado Wambo",
                "imagen": "<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/tuto4.png'?>'>"
            }
        ];
        var contador = 1;
        $("#instrumodal").on({
            click: function () {
                if (contador == 5) {
                    $("#textoIns").html(instrucciones[0].titulo);
                    $("#fotoIns").html(instrucciones[0].imagen);
                    contador = 1;
                }
                else {

                    $("#textoIns").html(instrucciones[contador].titulo);
                    $("#fotoIns").html(instrucciones[contador].imagen);
                    contador++;
                }
            }
        });
        $("#imagenUsuario").on({
            mouseenter: function(){
                    $(this).addClass("rubberBand");
                },
            mouseleave:function(){
                $(this).removeClass("rubberBand");
            },
            click:function(){
                $(this).toggleClass("flip");
                //$(this).removeClass("swing");
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
