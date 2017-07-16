<?php include "navs/nav_certificado.php" ?>
<div class="container-fluid bg-im3 padingtop" style="padding-bottom: 100px">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img alt="imagenUsuario" id="imagenUsuario" width="200" height="200"  class="img-circle center-block fondoavatar"
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
        <!-- mono con gorro y mensaje-->
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="animated infinite pulse">
                    <div class="instruccion-naranjo">
                        <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Consejo</h4>
                        <ol class="texto-modal-tip">
                            <li>Completa cada sección para desbloquear tu diploma Wambo</li>
                            <li>Al llegar a 100% podrás obtenerlo</li>
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
    <br>
    <br>
    <div class="container animated tada" id="obdiploma">
        <!-- Progreso a diploma-->
        <div class="row">
            <div class="col-md-2 col-md-offset-1 col-sm-2  col-sm-offset-1 col-xs-2 col-xs-offset-1">
                <?php if($estadoDiploma->valor_fruta==1){?>
                    <figure class="tool" data-toggle="tooltip" title="Frutas y Verduras">
                        <img alt="portadaFrutaVerdura" class="img-border img-responsive zoom" src="<?php echo base_url()."public/images/portadafrutaverduracompleta.png"?>">
                    </figure>
                <?php }else{?>
                    <figure class="tool" data-toggle="tooltip" title="Frutas y Verduras">
                        <img alt="portadaFrutaVerdura" class="img-border img-responsive zoom" src="<?php echo base_url()."public/images/portadafrutaverdura.png"?>">
                    </figure>
                <?php }?>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <?php if($estadoDiploma->valor_cereal==1){?>
                    <figure class="tool" data-toggle="tooltip" title="Cereales">
                        <img alt="portadaCereal" class="img-border img-responsive zoom" src="<?php echo base_url()."public/images/portadacerealcompleta.png"?>">
                    </figure>
                <?php }else{?>
                    <figure class="tool" data-toggle="tooltip" title="Cereales">
                        <img alt="portadaCereal" class="img-border img-responsive zoom" src="<?php echo base_url()."public/images/portadacereal.png"?>">
                    </figure>
                <?php }?>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <?php if($estadoDiploma->valor_deporte==1){?>
                    <figure class="tool" data-toggle="tooltip" title="Ejercicio y Deportes">
                        <img alt="portadaDeporte" class="img-border img-responsive zoom" src="<?php echo base_url()."public/images/portadadeportecompleta.png"?>">
                    </figure>
                <?php }else{?>
                    <figure class="tool" data-toggle="tooltip" title="Deportes">
                        <img alt="portadaDeporte" class="img-border img-responsive zoom" src="<?php echo base_url()."public/images/portadadeporte.png"?>">
                    </figure>
                <?php }?>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <?php if($estadoDiploma->valor_alimento==1){?>
                    <figure class="tool" data-toggle="tooltip" title="Carnes, Lacteos, Huevos y Legumbres">
                        <img alt="portadaAlimentos" class="img-border img-responsive zoom" src="<?php echo base_url()."public/images/portadacarnehuevocompleta.png"?>">
                    </figure>
                <?php }else{?>
                    <figure class="tool" data-toggle="tooltip" title="Carnes, Lacteos, Huevos y Legumbres">
                        <img alt="portadaAlimentos" class="img-border img-responsive zoom" src="<?php echo base_url()."public/images/portadacarnehuevo.png"?>">
                    </figure>
                <?php }?>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <?php if($estadoDiploma->valor_acgrasa==1){?>
                    <figure class="tool" data-toggle="tooltip" title="Aceites y Grasas">
                        <img alt="portadaAceiteGrasa" class="img-border img-responsive zoom" src="<?php echo base_url()."public/images/portadaaceitegrasacompleta.png"?>">
                    </figure>
                <?php }else{?>
                    <figure class="tool" data-toggle="tooltip" title="Aceites y Grasas">
                        <img alt="portadaAceiteGrasa" class="img-border img-responsive zoom" src="<?php echo base_url()."public/images/portadaaceitegrasa.png"?>">
                    </figure>
                <?php }?>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <div id="barraDiploma" class="progress barra">
                    <div id="barraDiploma2" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                         style="width:<?php
                         $suma=$estadoDiploma->valor_fruta+$estadoDiploma->valor_acgrasa+$estadoDiploma->valor_alimento
                             +$estadoDiploma->valor_deporte+$estadoDiploma->valor_cereal;
                         echo (($suma*100)/5);
                         ?>%">
                        <span id="avanceFruta"> <?php
                            $suma=$estadoDiploma->valor_fruta+$estadoDiploma->valor_acgrasa+$estadoDiploma->valor_alimento
                                +$estadoDiploma->valor_deporte+$estadoDiploma->valor_cereal;
                            echo (($suma*100)/5)."%";
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <!-- Link a diploma-->
        <div class="row">
            <div class="col-md-12 center-block">
                <?php if($estadoDiploma->valor_fruta==1 and $estadoDiploma->valor_acgrasa==1
                    and $estadoDiploma->valor_alimento==1 and $estadoDiploma->valor_deporte==1
                    and $estadoDiploma->valor_cereal==1){?>
                    <a href="<?php echo base_url()."aplicacion/diploma"?>">
                        <figure>
                            <img alt="diploma" class="img-responsive center-block img-seccion animated infinite pulse" src="<?php echo base_url()."public/images/icons/quality.png"?>">
                        </figure>
                    </a>
                <?php }else{?>
                    <a href="#obdiploma">
                        <figure>
                            <img alt="diploma" class="gris img-responsive center-block img-seccion animated infinite pulse" src="<?php echo base_url()."public/images/icons/quality.png"?>">
                        </figure>
                    </a>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"?>
<script>
    $(document).ready(function() {
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
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
