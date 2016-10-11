<?php include "navs/nav_cuenta.php" ?>
    <div class="container-fluid bg-im3"style="padding-bottom: 100px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img width="200px" height="200px"  class="img-circle center-block"
                         src="<?php
                         if($datos->avatar_name=="user")
                         {
                             echo base_url()."public/images/user_avatar/user.jpg";
                         }
                         else
                         {
                             echo base_url()."public/images/user_avatar/".$datos->nick.".jpg";
                         }
                         ?>">
                    <p class="text-center"><span class="puntaje"><?php echo $puntaje->puntos?></span></p>
                </div>
                <div class="col-md-6">
                    <h1 class="titulo1">Bienvenido</h1>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <div class="cuadradotarjeta4 bubble datm tipmain">
                            <div class="row">
                                <div class="col-md-4 col-xs-4">
                                    <img width="70" height="70" class="zoom center-block" src="<?php echo base_url()."public/images/icons/bulb.png"?>">
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="fruta" class="col-md-4 col-sm-6">
                        <div class=" text-center zoom borde frutacuenta">
                            <img id="portadafruta" width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada1.png"?>">
                            <div class="maintitulo">
                                <h3 id="tfrut">
                                    Frutas
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:34%">
                                            40%
                                        </div>
                                    </div>
                                </h3>
                            </div>
                            <p class="descp-tarjeta">Todo sobre frutas</p>
                            <a href="<?php echo base_url()."aplicacion/frutas"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="verdura" class="col-md-4 col-sm-6">
                        <div class=" text-center borde zoom verduracuenta">
                            <img id="portadaverdura" width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada2.png"?>">
                            <div class="maintitulo">
                                <h3 id="tverd">
                                    Verduras
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:64%">
                                            40%
                                        </div>
                                    </div>
                                </h3>
                            </div>
                            <p class="descp-tarjeta">Todo sobre las verduras</p>
                            <a href="<?php echo base_url()."aplicacion/verduras"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="alimento" class="col-md-4 col-sm-6">
                        <div class="text-center borde zoom alimentocuenta">
                            <img id="portadaalimento" width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada5.png"?>">
                            <div class="maintitulo">
                                <h3 id="tali">
                                    Alimentos
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:18%">
                                            40%
                                        </div>
                                    </div>
                                </h3>
                            </div>
                            <p class="descp-tarjeta">Todo sobre los alimentos</p>
                            <a href="<?php echo base_url()."aplicacion/alimentos"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="receta" class="col-md-4 col-sm-6">
                        <div class="text-center zoom borde recetacuenta">
                            <img id="portadareceta" width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada4.jpg"?>">
                            <div class="maintitulo">
                                <h3 id="trec">
                                    Mis recetas
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                            40%
                                        </div>
                                    </div>
                                </h3>
                            </div>
                            <p class="descp-tarjeta">Ricas y saludables recetas</p>
                            <a href="<?php echo base_url()."aplicacion/receta"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="deporte" class="col-md-4 col-sm-6">
                        <div class="text-center zoom borde deportecuenta">
                            <img id="portadadeporte" width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada3.png"?>">
                            <div class="maintitulo">
                                <h3 id="tdep">
                                    Actividad física
                                    <div class="progress barra">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            40%
                                        </div>
                                    </div>
                                </h3>
                            </div>
                            <p class="descp-tarjeta">Tdoo sobre la actividad física!</p>
                            <a href="<?php echo base_url()."aplicacion/edufisica"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="fruta" class="col-md-4 col-sm-6">
                        <div class=" text-center zoom borde frutacuenta">
                            <img id="portadafruta" width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada1.png"?>">
                            <div class="maintitulo">
                                <h3 id="tfrut">Super Tips</h3>
                            </div>
                            <p class="descp-tarjeta">Super consejos para tu vida</p>
                            <a href="<?php echo base_url()."aplicacion/frutas"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"?>
<script>
    $(document).ready(function() {
        $("#fruta").on({
            mouseenter:function(){
                $("#portadafruta").addClass("borde");
                $("#tfrut").css("color","#EC774B");
            },
            mouseleave:function(){
                $("#portadafruta").removeClass("borde");
                $("#tfrut").css("color","white");
            }
        });
        $("#verdura").on({
            mouseenter:function(){
                $("#portadaverdura").addClass("borde");
                $("#tverd").css("color","#EC774B");
            },
            mouseleave:function(){
                $("#portadaverdura").removeClass("borde");
                $("#tverd").css("color","white");
            }
        });
        $("#alimento").on({
            mouseenter:function(){
                $("#portadaalimento").addClass("borde");
                $("#tali").css("color","#EC774B");
            },
            mouseleave:function(){
                $("#portadaalimento").removeClass("borde");
                $("#tali").css("color","white");
            }
        });
        $("#receta").on({
            mouseenter:function(){
                $("#portadareceta").addClass("borde");
                $("#trec").css("color","#EC774B");
            },
            mouseleave:function(){
                $("#portadareceta").removeClass("borde");
                $("#trec").css("color","white");
            }
        });
        $("#deporte").on({
            mouseenter:function(){
                $("#portadadeporte").addClass("borde");
                $("#tdep").css("color","#EC774B");
            },
            mouseleave:function(){
                $("#portadadeporte").removeClass("borde");
                $("#tdep").css("color","white");
            }
        });
    });
</script>
