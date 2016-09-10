<?php include "navs/nav_cuenta.php" ?>
    <div class="container-fluid bg-im3"style="padding-bottom: 100px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img width="200px" height="200px"  class="img-circle center-block"
                         src="<?php
                         if($datos->avatar_name=="")
                         {
                             echo base_url()."public/images/user_avatar/user.jpg";
                         }
                         else if($datos->avatar_name==$datos->nick)
                         {
                             echo base_url()."public/images/user_avatar/".$datos->nick.".jpg";
                         }
                         ?>">
                </div>
                <div class="col-md-6">
                    <h1 class="titulo1">Bienvenido</h1>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <div class="cuadradotarjeta4 bubble datm" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
                            <div class="row">
                                <div class="col-md-4 col-xs-4">
                                    <img width="50" height="50" class="rotate center-block" src="<?php echo base_url()."public/images/tip.png"?>">
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
            <div class="row"style="padding-bottom: 30px;padding-top: 30px">
                <div class="col-md-3 col-md-offset-1 text-center zoom borde" style="background-color: #6FC191;margin-right: 20px;border-radius: 5px;padding-top: 10px;padding-bottom: 10px">
                    <img width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada1.png"?>">
                    <div style="background-color: #495052;">
                        <h3 style="font-family: 'finger paint';color: white;padding: 5%">Frutas</h3>
                    </div>
                    <p class="descp-tarjeta">Todo sobre frutas</p>
                    <a href="<?php echo base_url()."aplicacion/frutas"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                </div>
                <div class="col-md-3 text-center borde zoom"style="background-color: #74CEE4;margin-right: 20px;border-radius: 5px;padding-top: 10px;padding-bottom: 10px">
                    <img width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada2.png"?>">
                    <div style="background-color: #495052;width: 100%">
                        <h3 style="font-family: 'finger paint';color: white;padding: 5%">Verduras</h3>
                    </div>
                    <p class="descp-tarjeta">Todo sobre las verduras</p>
                    <a href="<?php echo base_url()."aplicacion/verduras"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                </div>
                <div class="col-md-3 text-center borde zoom"style="background-color: #EDBF47;border-radius: 5px;padding-top: 10px;padding-bottom: 10px">
                    <img width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada5.png"?>">
                    <div style="background-color: #495052">
                        <h3 style="font-family: 'finger paint';color: white;padding: 5%">Alimentos</h3>
                    </div>
                    <p class="descp-tarjeta">Todo sobre los alimentos</p>
                    <a href="<?php echo base_url()."aplicacion/alimentos"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                </div>
            </div>
            <div class="row" style="padding-bottom: 30px;padding-top: 30px">
                <div class="col-md-3 col-md-offset-1 text-center zoom borde" style="background-color: #E16C6C;margin-right: 20px;border-radius: 5px;padding-top: 10px;padding-bottom: 10px">
                    <img width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada4.jpg"?>">
                    <div style="background-color: #495052;">
                        <h3 style="font-family: 'finger paint';color: white;padding: 5%">Mis recetas</h3>
                    </div>
                    <p class="descp-tarjeta">Ricas y saludables recetas</p>
                    <a href="<?php echo base_url()."aplicacion/mis_recetas"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                </div>
                <div class="col-md-3 text-center zoom borde" style="background-color: #EDBF47;margin-right: 20px;border-radius: 5px;padding-top: 10px;padding-bottom: 10px">
                    <img width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada3.png"?>">
                    <div style="background-color: #495052">
                        <h3 style="font-family: 'finger paint';color: white;padding: 5%">Actividad física</h3>
                    </div>
                    <p class="descp-tarjeta">Tdoo sobre la actividad física!</p>
                    <a href="<?php echo base_url()."aplicacion/edufisica"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                </div>
            </div>
        </div>

    </div>
<?php include "footer.php"?>