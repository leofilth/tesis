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
                                <figure>
                                    <img alt="info" class="center-block tamano100"  src="<?php echo base_url()."public/images/icons/customer-service.png"?>">
                                </figure>
                            </div>
                        </div>
                        <div class="contador">
                            <span id="contadorInstru">1</span>/5
                        </div>
                    </div>
                    <figure>
                        <img alt="click" class="icon-click animated infinite flash" src="<?php echo base_url()."public/images/icons/click.png"?>">
                    </figure>
                </div>
                <div class="triangulo"></div>
                <br>
                <figure>
                    <img alt="estudiante2" class="img-border icon-inst" src="<?php echo base_url().'public/images/modal/student2.png'?>">
                </figure>
                <div style="margin-top: 60px">
                    <button id="mostrarmodal" type="button" class="btn btn-danger" style="position:absolute;bottom:10px;left:10px;margin:0;padding:10px 10px;font-family: 'finger paint'" data-dismiss="modal">No volver a mostar</button>
                    <button type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'" data-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="container-fluid bg-im3 padingbot padingtop">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <figure>
                        <img alt="imagenUsuario" id="imagenUsuario" width="200" height="200"  class="img-circle center-block fondoavatar animated"
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
                    </figure>
                </div>
                <div class="col-md-6 col-sm-12">
                    <?php if($datos->sexo == "masculino"){?>
                    <h1 class="titulo1 animated tada">Bienvenido <?php echo $datos->nick?></h1>
                    <?php }else{?>
                    <h1 class="titulo1 animated tada">Bienvenida <?php echo $datos->nick?></h1>
                    <?php }?>
                </div>
                <div class="col-md-3 col-sm-12">
                        <div class="cuadradotarjeta4 animated infinite pulse tipmain">
                            <div class="row">
                                <div class="col-md-4 col-xs-4">
                                    <figure>
                                        <img alt="ampolleta" width="70" height="70" class="zoom center-block animated flash img-portada" src="<?php echo base_url()."public/images/icons/bulb.png"?>">
                                    </figure>
                                </div>
                                <div class="col-md-8 col-xs-8">
                                    <p class="descp-tarjeta text-center">Súper Tip</p>
                                    <p class="descp-tarjeta text-center"><?php  echo $tip->descripcion?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <h3 class="titulo1 text-center">¿Qué quieres aprender hoy?</h3>
        <div id="container1" class="container animated bounceIn">
            <div class="row">
                    <div id="fruta" class="col-md-4 col-sm-6">
                        <div class=" text-center borde frutacuenta">
                            <?php if($estadoDiploma->valor_fruta==1){?>
                            <figure>
                                <img alt="verduraCompleta" id="portadafruta" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadafrutaverduracompleta.png"?>">
                            </figure>
                            <?php }else{?>
                                <figure>
                                    <img alt="verduraIncompleta" id="portadafruta" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadafrutaverdura.png"?>">
                                </figure>
                            <?php }?>
                            <div class="maintitulo">
                                <h3 id="tfrut">
                                    Frutas y Verduras
                                </h3>
                                <div class="progress barra">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalFruta?>%">
                                            <span id="avanceFruta">
                                                <?php echo $totalFruta."%"?>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url()."aplicacion/frutasverduras"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="cereales" class="col-md-4 col-sm-6">
                        <div class=" text-center borde  cerealcuenta">
                            <?php if($estadoDiploma->valor_cereal==1){?>
                                <figure>
                                    <img alt="cerealCompleto" id="portadacereal" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadacerealcompleta.png"?>">
                                </figure>
                            <?php }else{?>
                                <figure>
                                    <img alt="cerealIncompleto" id="portadacereal" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadacereal.png"?>">
                                </figure>
                            <?php }?>
                            <div class="maintitulo">
                                <h3 id="tcer">
                                    Cereales
                                </h3>
                                <div class="progress barra">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalCereal?>%">
                                            <span id="avanceCereal">
                                                <?php echo $totalCereal."%"?>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url()."aplicacion/cereales"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="aceitegrasa" class="col-md-4 col-sm-6">
                        <div class="text-center borde  acgrasacuenta">
                            <?php if($estadoDiploma->valor_acgrasa==1){?>
                                <figure>
                                    <img alt="aceitegrasaCompleto" id="portadaacgrasa" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadaaceitegrasacompleta.png"?>">
                                </figure>
                            <?php }else{?>
                                <figure>
                                    <img alt="aceitegrasaIncompleto" id="portadaacgrasa" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadaaceitegrasa.png"?>">
                                </figure>
                            <?php }?>
                            <div class="maintitulo">
                                <h3 id="tacgrasa">
                                    Aceites y Grasas
                                </h3>
                                <div class="progress barra">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalAcGrasa?>%">
                                            <span id="avanceAcGrasa">
                                                <?php echo $totalAcGrasa."%"?>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url()."aplicacion/aceitegrasas"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="alimento" class="col-md-4 col-sm-6">
                        <div class="text-center borde  alimentocuenta">
                            <?php if($estadoDiploma->valor_alimento==1){?>
                                <figure>
                                    <img alt="alimentoCompleto" id="portadaalimento" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadacarnehuevocompleta.png"?>">
                                </figure>
                            <?php }else{?>
                                <figure>
                                    <img alt="alimentoIncompleto" id="portadaalimento" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadacarnehuevo.png"?>">
                                </figure>
                            <?php }?>
                            <div class="maintitulo">
                                <h3 id="tali">
                                    Carne, Lacteos, Huevos y Legumbres
                                </h3>
                                <div class="progress barra">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalAlimento?>%">
                                            <span id="avanceAlimento">
                                                <?php echo $totalAlimento."%"?>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url()."aplicacion/alimentos"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="deporte" class="col-md-4 col-sm-6">
                        <div class="text-center  borde deportecuenta">
                            <?php if($estadoDiploma->valor_deporte==1){?>
                                <figure>
                                    <img alt="deporteCompleto" id="portadadeporte" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadadeportecompleta.png"?>">
                                </figure>
                            <?php }else{?>
                                <figure>
                                    <img alt="deporteIncompleto" id="portadadeporte" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadadeporte.png"?>">
                                </figure>
                            <?php }?>
                            <div class="maintitulo">
                                <h3 id="tdep">
                                    Deportes
                                </h3>
                                <div class="progress barra">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalDeporte?>%">
                                            <span id="avanceDeporte">
                                               <?php echo $totalDeporte."%"?>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url()."aplicacion/deporte"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="micertificado" class="col-md-4  col-sm-6">
                        <div class=" text-center  borde diplomacuenta">
                            <img alt="certificado" id="portadacertificado" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portada7.png"?>">
                            <div class="maintitulo">
                                <h3 id="tcert">Mi Diploma</h3>
                            </div>
                            <a href="<?php echo base_url()."aplicacion/certificado"?>" class="btn-cuenta titulo5 center-block zoom">Ir</a>
                        </div>
                    </div>
            </div>
        </div>
        <div id="container2" class="container animated tada">
            <div class="row">
                <div id="noticias" class="col-md-4 col-md-offset-2 col-sm-6">
                    <div class=" text-center  borde noticiacuenta">
                        <figure>
                            <img alt="noticias" id="portadanoticia"  class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portada6m.png"?>">
                        </figure>
                        <div class="maintitulo">
                            <h3 id="tnot">Noticias</h3>
                        </div>
                        <a href="<?php echo base_url()."aplicacion/noticias"?>" class="btn-cuenta titulo5 center-block zoom">Ir</a>
                    </div>
                </div>
                <div id="desafio" class="col-md-4  col-md-offset-0 col-sm-6">
                    <div class=" text-center  borde desafiocuenta">
                        <figure>
                            <img alt="estrella" id="portadadesafio" class="center-block img-seccion" src="<?php echo base_url()."public/images/icons/star.png"?>">
                        </figure>
                        <div class="maintitulo">
                            <h3 id="tdes">Desafío Diario</h3>
                        </div>
                        <a href="<?php echo base_url()."aplicacion/desafiodiario"?>" class="btn-cuenta titulo5 center-block zoom">Ir</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="container3" class="container animated tada">
            <div data-ride="carousel" data-interval="false" class="carousel slide" id="myCarousel">
                <!-- Indicators -->
                <ol id="lista-carousel" class="carousel-indicators hidden">
                    <li class="" data-slide-to="0" data-target="#myCarousel"></li>
                    <li data-slide-to="1" data-target="#myCarousel" class="active"></li>
                    <li data-slide-to="2" data-target="#myCarousel" class=""></li>
                    <li data-slide-to="3" data-target="#myCarousel" class=""></li>
                    <li data-slide-to="4" data-target="#myCarousel" class=""></li>
                    <li data-slide-to="5" data-target="#myCarousel" class=""></li>
                    <li data-slide-to="6" data-target="#myCarousel" class=""></li>
                    <li data-slide-to="7" data-target="#myCarousel" class=""></li>
                </ol>
                <div role="listbox" class="carousel-inner">
                    <div class="item active">
                        <div id="fruta" class="col-md-4 col-sm-6">
                            <div class=" text-center borde frutacuenta">
                                <?php if($estadoDiploma->valor_fruta==1){?>
                                    <figure>
                                        <img alt="verduraCompleta" id="portadafruta" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadafrutaverduracompleta.png"?>">
                                    </figure>
                                <?php }else{?>
                                    <figure>
                                        <img alt="verduraIncompleta" id="portadafruta" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadafrutaverdura.png"?>">
                                    </figure>
                                <?php }?>
                                <div class="maintitulo">
                                    <h3 id="tfrut">
                                        Frutas y Verduras
                                    </h3>
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalFruta?>%">
                                            <span id="avanceFruta">
                                                <?php echo $totalFruta."%"?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."aplicacion/frutasverduras"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="cereales" class="col-md-4 col-sm-6">
                            <div class=" text-center borde  cerealcuenta">
                                <?php if($estadoDiploma->valor_cereal==1){?>
                                    <figure>
                                        <img alt="cerealCompleto" id="portadacereal" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadacerealcompleta.png"?>">
                                    </figure>
                                <?php }else{?>
                                    <figure>
                                        <img alt="cerealIncompleto" id="portadacereal" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadacereal.png"?>">
                                    </figure>
                                <?php }?>
                                <div class="maintitulo">
                                    <h3 id="tcer">
                                        Cereales
                                    </h3>
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalCereal?>%">
                                            <span id="avanceCereal">
                                                <?php echo $totalCereal."%"?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."aplicacion/cereales"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="aceitegrasa" class="col-md-4 col-sm-6">
                            <div class="text-center borde  acgrasacuenta">
                                <?php if($estadoDiploma->valor_acgrasa==1){?>
                                    <figure>
                                        <img alt="aceitegrasaCompleto" id="portadaacgrasa" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadaaceitegrasacompleta.png"?>">
                                    </figure>
                                <?php }else{?>
                                    <figure>
                                        <img alt="aceitegrasaIncompleto" id="portadaacgrasa" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadaaceitegrasa.png"?>">
                                    </figure>
                                <?php }?>
                                <div class="maintitulo">
                                    <h3 id="tacgrasa">
                                        Aceites y Grasas
                                    </h3>
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalAcGrasa?>%">
                                            <span id="avanceAcGrasa">
                                                <?php echo $totalAcGrasa."%"?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."aplicacion/aceitegrasas"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="alimento" class="col-md-4 col-sm-6">
                            <div class="text-center borde  alimentocuenta">
                                <?php if($estadoDiploma->valor_alimento==1){?>
                                    <figure>
                                        <img alt="alimentoCompleto" id="portadaalimento" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadacarnehuevocompleta.png"?>">
                                    </figure>
                                <?php }else{?>
                                    <figure>
                                        <img alt="alimentoIncompleto" id="portadaalimento" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadacarnehuevo.png"?>">
                                    </figure>
                                <?php }?>
                                <div class="maintitulo">
                                    <h3 id="tali">
                                        Carne, Lacteos, Huevos y Legumbres
                                    </h3>
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalAlimento?>%">
                                            <span id="avanceAlimento">
                                                <?php echo $totalAlimento."%"?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."aplicacion/alimentos"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="deporte" class="col-md-4 col-sm-6">
                            <div class="text-center  borde deportecuenta">
                                <?php if($estadoDiploma->valor_deporte==1){?>
                                    <figure>
                                        <img alt="deporteCompleto" id="portadadeporte" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadadeportecompleta.png"?>">
                                    </figure>
                                <?php }else{?>
                                    <figure>
                                        <img alt="deporteIncompleto" id="portadadeporte" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portadadeporte.png"?>">
                                    </figure>
                                <?php }?>
                                <div class="maintitulo">
                                    <h3 id="tdep">
                                        Deportes
                                    </h3>
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalDeporte?>%">
                                            <span id="avanceDeporte">
                                               <?php echo $totalDeporte."%"?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."aplicacion/deporte"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="micertificado" class="col-md-4  col-sm-6">
                            <div class=" text-center  borde diplomacuenta">
                                <img alt="certificado" id="portadacertificado" class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portada7.png"?>">
                                <div class="maintitulo">
                                    <h3 id="tcert">Mi Diploma</h3>
                                </div>
                                <a href="<?php echo base_url()."aplicacion/certificado"?>" class="btn-cuenta titulo5 center-block zoom">Ir</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="noticias" class="col-md-4 col-md-offset-2 col-sm-6">
                            <div class=" text-center  borde noticiacuenta">
                                <figure>
                                    <img alt="noticias" id="portadanoticia"  class="img-border center-block img-seccion" src="<?php echo base_url()."public/images/portada6m.png"?>">
                                </figure>
                                <div class="maintitulo">
                                    <h3 id="tnot">Noticias</h3>
                                </div>
                                <a href="<?php echo base_url()."aplicacion/noticias"?>" class="btn-cuenta titulo5 center-block zoom">Ir</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="desafio" class="col-md-4  col-md-offset-0 col-sm-6">
                            <div class=" text-center  borde desafiocuenta">
                                <figure>
                                    <img alt="estrella" id="portadadesafio" class="center-block img-seccion" src="<?php echo base_url()."public/images/icons/star.png"?>">
                                </figure>
                                <div class="maintitulo">
                                    <h3 id="tdes">Desafío Diario</h3>
                                </div>
                                <a href="<?php echo base_url()."aplicacion/desafiodiario"?>" class="btn-cuenta titulo5 center-block zoom">Ir</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a data-slide="prev" role="button" href="#myCarousel" class="left carousel-control">
                    <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-slide="next" role="button" href="#myCarousel" class="right carousel-control">
                    <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
</section>
<?php include "footer.php"?>
<script>
    $(document).ready(function() {
        var avanceFruta=$("#avanceFruta").text().match(/\d/g).join("");
        var avanceCereal=$("#avanceCereal").text().match(/\d/g).join("");
        var avanceAlimento=$("#avanceAlimento").text().match(/\d/g).join("");
        var avanceAcGrasa=$("#avanceAcGrasa").text().match(/\d/g).join("");
        var avanceDeporte=$("#avanceDeporte").text().match(/\d/g).join("");
        var tutorial =<?php echo json_encode($tutorial,JSON_PRETTY_PRINT)?>;
        var estadoDiploma=<?php echo json_encode($estadoDiploma,JSON_PRETTY_PRINT)?>;
        var mostrar = tutorial.cuenta;
        var contador = 1;
        //var thenum = avanceFruta.match(/\d/g);
        //var numb = thenum.join("");
        //console.log(avanceFruta);
        //if(avanceFruta==100){console.log("si");}
        //console.log("100%");
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
                "titulo": "<span class='glyphicon glyphicon-ok'></span> Elije tu sección: Frutas y Verduras, Cereales, Deportes, Aceites y Grasas, Carnes Lácteos Huevos y Legumbres",
                "imagen": "<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/tuto1.png'?>'>"
            },
            {
                "titulo": "<span class='glyphicon glyphicon-ok'></span> Supera los desafíos y gana monedas",
                "imagen": "<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/tuto2.png'?>'>"
            },
            {
                "titulo": "<span class='glyphicon glyphicon-ok'></span> Canjea tus monedas por Alimentos y Deportes",
                "imagen": "<img  class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/tuto3.png'?>'>"
            },
            {
                "titulo": "<span class='glyphicon glyphicon-ok'></span> Aprende y obtén tu certificado Wambo",
                "imagen": "<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/tuto4.png'?>'>"
            }
        ];
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
        if(avanceFruta==100) {
            /*
             si ya agregó una vez no volver hacerlo.
             */
            if (estadoDiploma.valor_fruta != 1) {
                guardaSeccionCompletada('<?php echo base_url()."aplicacion/guardaSeccionCompleta"?>', "fruta");
                $("#portadafruta").attr("src","<?php echo base_url().'public/images/portadafrutaverduracompleta.png'?>");
            }
        }
        if(avanceCereal==100){
            if(estadoDiploma.valor_cereal!=1){
                guardaSeccionCompletada('<?php echo base_url()."aplicacion/guardaSeccionCompleta"?>',"cereal");
                $("#portadacereal").attr("src","<?php echo base_url().'public/images/portadacerealcompleta.png'?>");
            }
        }
        if(avanceAcGrasa==100){
            if(estadoDiploma.valor_acgrasa!=1){
                guardaSeccionCompletada('<?php echo base_url()."aplicacion/guardaSeccionCompleta"?>',"acgrasa");
                $("#portadaacgrasa").attr("src","<?php echo base_url().'public/images/portadaaceitegrasacompleta.png'?>");
            }
        }
        if(avanceDeporte==100){
            if(estadoDiploma.valor_deporte!=1) {
                guardaSeccionCompletada('<?php echo base_url()."aplicacion/guardaSeccionCompleta"?>', "deporte");
                $("#portadadeporte").attr("src","<?php echo base_url().'public/images/portadadeportecompleta.png'?>");
            }
        }
        if(avanceAlimento==100){
            if(estadoDiploma.valor_alimento!=1) {
                guardaSeccionCompletada('<?php echo base_url()."aplicacion/guardaSeccionCompleta"?>', "alimento");
                $("#portadaalimento").attr("src","<?php echo base_url().'public/images/portadacarnehuevocompleta.png'?>");
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
                $("#portadafruta").addClass("borde animated flipInY");
                //$("#tfrut").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadafruta").removeClass("borde animated flipInY");
                $("#tfrut").css("color", "white");
            }
        });
        $("#aceitegrasa").on({
            mouseenter: function () {
                $("#portadaacgrasa").addClass("borde animated flipInY");
                $("#tacgrasa").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadaacgrasa").removeClass("borde animated flipInY");
                $("#tacgrasa").css("color", "white");
            }
        });
        $("#alimento").on({
            mouseenter: function () {
                $("#portadaalimento").addClass("borde animated flipInY");
                $("#tali").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadaalimento").removeClass("borde animated flipInY");
                $("#tali").css("color", "white");
            }
        });
        $("#cereales").on({
            mouseenter: function () {
                $("#portadacereal").addClass("borde animated flipInY");
                $("#tcer").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadacereal").removeClass("borde animated flipInY");
                $("#tcer").css("color", "white");
            }
        });
        $("#deporte").on({
            mouseenter: function () {
                $("#portadadeporte").addClass("borde animated flipInY");
                $("#tdep").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadadeporte").removeClass("borde animated flipInY");
                $("#tdep").css("color", "white");
            }
        });
        $("#micertificado").on({
            mouseenter: function () {
                $("#portadacertificado").addClass("borde animated bounceIn");
                $("#tcert").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadacertificado").removeClass("borde animated bounceIn");
                $("#tcert").css("color", "white");
            }
        });
        $("#noticias").on({
            mouseenter: function () {
                $("#portadanoticia").addClass("borde animated rubberBand");
                $("#tnot").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadanoticia").removeClass("borde animated rubberBand");
                $("#tnot").css("color", "white");
            }
        });
        $("#desafio").on({
            mouseenter: function () {
                $("#portadadesafio").addClass(" animated flip");
                $("#tdes").css("color", "#673AB7");
            },
            mouseleave: function () {
                $("#portadadesafio").removeClass("animated flip");
                $("#tdes").css("color", "white");
            }
        });
        $("#instrumodal").on({
            click: function () {
                if (contador == 5) {
                    $("#textoIns").html(instrucciones[0].titulo);
                    $("#fotoIns").html(instrucciones[0].imagen);
                    contador = 1;
                    $("#contadorInstru").text(contador);
                }
                else {

                    $("#textoIns").html(instrucciones[contador].titulo);
                    $("#fotoIns").html(instrucciones[contador].imagen);
                    contador++;
                    $("#contadorInstru").text(contador);
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
        $(".img-portada").on({
            mouseenter: function(){
                $(this).addClass("animated flip");
            },
            mouseleave:function(){
                $(this).removeClass("animated flip");
            }
        });
    });
</script>
