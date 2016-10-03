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
                        <div class="cuadradotarjeta4 bubble datm" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
                            <div class="row">
                                <div class="col-md-4 col-xs-4">
                                    <img width="70" height="70" class="zoom center-block" src="<?php echo base_url()."public/images/icons/animat-lightbulb-color.gif"?>">
                                    <img width="50" height="83" class="center-block" src="<?php echo base_url()."public/images/student5.png"?>">
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
            <div class="row"style="margin-bottom: 30px;margin-top: 30px">
                <div id="fruta" class="col-md-3 col-md-offset-1 text-center zoom borde" style="background-color: #6FC191;margin-right: 20px;border-radius: 5px;padding-top: 10px;padding-bottom: 10px;margin-bottom: 10px">
                    <img id="portadafruta" width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada1.png"?>">
                    <div style="background-color: #495052;">
                        <h3 id="tfrut" style="font-family: 'finger paint';color: white;padding: 5%">Frutas</h3>
                    </div>
                    <p class="descp-tarjeta">Todo sobre frutas</p>
                    <a href="<?php echo base_url()."aplicacion/frutas"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                </div>
                <div id="verdura" class="col-md-3 text-center borde zoom"style="background-color: #74CEE4;margin-right: 20px;border-radius: 5px;padding-top: 10px;padding-bottom: 10px;margin-bottom: 10px">
                    <img id="portadaverdura" width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada2.png"?>">
                    <div style="background-color: #495052;width: 100%">
                        <h3 id="tverd" style="font-family: 'finger paint';color: white;padding: 5%">Verduras</h3>
                    </div>
                    <p class="descp-tarjeta">Todo sobre las verduras</p>
                    <a href="<?php echo base_url()."aplicacion/verduras"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                </div>
                <div id="alimento" class="col-md-3 text-center borde zoom"style="background-color: #EDBF47;margin-right: 20px;border-radius: 5px;padding-top: 10px;padding-bottom: 10px;margin-bottom: 10px">
                    <img id="portadaalimento" width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada5.png"?>">
                    <div style="background-color: #495052">
                        <h3 id="tali" style="font-family: 'finger paint';color: white;padding: 5%">Alimentos</h3>
                    </div>
                    <p class="descp-tarjeta">Todo sobre los alimentos</p>
                    <a href="<?php echo base_url()."aplicacion/alimentos"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                </div>
            </div>
            <div class="row" style="padding-bottom: 30px;padding-top: 30px">
                <div id="receta" class="col-md-3 col-md-offset-1 text-center zoom borde" style="background-color: #E16C6C;margin-right: 20px;border-radius: 5px;padding-top: 10px;padding-bottom: 10px;margin-bottom: 10px">
                    <img id="portadareceta" width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada4.jpg"?>">
                    <div style="background-color: #495052;">
                        <h3 id="trec" style="font-family: 'finger paint';color: white;padding: 5%">Mis recetas</h3>
                    </div>
                    <p class="descp-tarjeta">Ricas y saludables recetas</p>
                    <a href="<?php echo base_url()."aplicacion/receta"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                </div>
                <div id="deporte" class="col-md-3 text-center zoom borde" style="background-color: #EDBF47;margin-right: 20px;border-radius: 5px;padding-top: 10px;padding-bottom: 10px;margin-bottom: 10px">
                    <img id="portadadeporte" width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada3.png"?>">
                    <div style="background-color: #495052">
                        <h3 id="tdep" style="font-family: 'finger paint';color: white;padding: 5%">Actividad física</h3>
                    </div>
                    <p class="descp-tarjeta">Tdoo sobre la actividad física!</p>
                    <a href="<?php echo base_url()."aplicacion/edufisica"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
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
