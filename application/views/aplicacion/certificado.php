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
        <!-- mono con gorro y mensaje-->
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="animated infinite pulse">
                    <div class="instruccion-naranjo">
                        <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Consejo</h4>
                        <ol class="texto-modal-tip" id="descripcion-tip">
                            <li>Completa cada sección para desbloquear tu diploma Wambo</li>
                            <li>Al llegar a 100% podrás descargarlo</li>
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
    <br>
    <br>
    <div class="container animated tada">
        <!-- Progreso a diploma-->
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <?php if($estadoDiploma->valor_fruta==1){?>
                    <figure>
                        <img class="img-circle img-responsive zoom" src="<?php echo base_url()."public/images/portada1medalla.png"?>">
                    </figure>
                <?php }else{?>
                    <figure>
                        <img class="img-circle img-responsive zoom" src="<?php echo base_url()."public/images/portada1m.png"?>">
                    </figure>
                <?php }?>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <?php if($estadoDiploma->valor_verdura==1){?>
                    <figure>
                        <img class="img-circle img-responsive zoom" src="<?php echo base_url()."public/images/portada2medalla.png"?>">
                    </figure>
                <?php }else{?>
                    <figure>
                        <img class="img-circle img-responsive zoom" src="<?php echo base_url()."public/images/portada2m.png"?>">
                    </figure>
                <?php }?>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <?php if($estadoDiploma->valor_deporte==1){?>
                    <figure>
                        <img class="img-circle img-responsive zoom" src="<?php echo base_url()."public/images/portada3medalla.png"?>">
                    </figure>
                <?php }else{?>
                    <figure>
                        <img class="img-circle img-responsive zoom" src="<?php echo base_url()."public/images/portada3m.png"?>">
                    </figure>
                <?php }?>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <?php if($estadoDiploma->valor_alimento==1){?>
                    <figure>
                        <img class="img-circle img-responsive zoom" src="<?php echo base_url()."public/images/portada5medalla.png"?>">
                    </figure>
                <?php }else{?>
                    <figure>
                        <img class="img-circle img-responsive zoom" src="<?php echo base_url()."public/images/portada5m.png"?>">
                    </figure>
                <?php }?>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="barraDiploma" class="progress barra">
                    <div id="barraDiploma2" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                         style="width:<?php
                         $suma=$estadoDiploma->valor_fruta+$estadoDiploma->valor_verdura+$estadoDiploma->valor_alimento
                             +$estadoDiploma->valor_deporte;
                         echo (($suma*100)/4);
                         ?>%">
                        <span id="avanceFruta"> <?php
                            $suma=$estadoDiploma->valor_fruta+$estadoDiploma->valor_verdura+$estadoDiploma->valor_alimento
                                +$estadoDiploma->valor_deporte;
                            echo (($suma*100)/4);
                            ?>
                        </span>
                        %
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
                <?php if($estadoDiploma->valor_fruta==1 and $estadoDiploma->valor_verdura==1
                    and $estadoDiploma->valor_alimento==1 and $estadoDiploma->valor_deporte==1){?>
                    <a href="<?php echo base_url()."aplicacion/diploma"?>">
                        <figure>
                            <img class="img-responsive center-block img-seccion animated infinite pulse" src="<?php echo base_url()."public/images/icons/quality.png"?>">
                        </figure>
                    </a>
                <?php }else{?>
                    <a href="#">
                        <figure>
                            <img class="gris img-responsive center-block img-seccion animated infinite pulse" src="<?php echo base_url()."public/images/icons/quality.png"?>">
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
    });
</script>
