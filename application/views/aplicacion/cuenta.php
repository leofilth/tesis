<?php include "navs/nav_cuenta.php" ?>
    <div class="container-fluid bg-im3"style="padding-bottom: 100px">
        <div class="container">
            <!-- Modal
            Tutorial Wambo
            -->
            <div class="modal fade" id="modaltip" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body" style="background-color: #673AB7">
                            <div class="tip-modal">
                                <div class="margen-modal">
                                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Así funciona Wambo</h4>
                                    <p class="texto-modal-tip" id="descripcion-tip"></p>
                                </div>
                            </div>
                            <div class="triangulo"></div>
                            <br>
                            <img class="img-circle" width="20%" src="<?php echo base_url().'public/images/modal/student2.png'?>">
                            <div style="margin-top: 100px">
                                <button id="mostrarmodal" type="button" class="btn btn-info" style="position:absolute;bottom:10px;left:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">No volver a mostar</button>
                                <button type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">Entendido</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img width="200px" height="200px"  class="img-circle center-block fondoavatar"
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
                    <p class="text-center"><span class="puntaje"><?php echo $puntaje->puntos?></span></p>
                </div>
                <div class="col-md-6">
                    <?php if($datos->sexo == "masculino"){?>
                    <h1 class="titulo1">Bienvenido <?php echo $datos->nick?></h1>
                    <?php }else{?>
                    <h1 class="titulo1">Bienvenida <?php echo $datos->nick?></h1>
                    <?php }?>
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
                        <div class=" text-center borde frutacuenta">
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
                        <div class=" text-center borde  verduracuenta">
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
                        <div class="text-center borde  alimentocuenta">
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
                        <div class="text-center  borde recetacuenta">
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
                        <div class="text-center  borde deportecuenta">
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
                            <a href="<?php echo base_url()."aplicacion/deporte"?>" class="btn-cuenta titulo5 center-block zoom">Aprender</a>
                        </div>
                    </div>
                    <div id="fruta" class="col-md-4 col-sm-6">
                        <div class=" text-center  borde noticiacuenta">
                            <img id="portadafruta" width="200" height="200" class="img-circle center-block" src="<?php echo base_url()."public/images/portada1.png"?>">
                            <div class="maintitulo">
                                <h3 id="tfrut">Noticias</h3>
                            </div>
                            <p class="descp-tarjeta">Super noticias saludables</p>
                            <a href="<?php echo base_url()."aplicacion/noticias"?>" class="btn-cuenta titulo5 center-block zoom">Ir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"?>
<script>
    $(document).ready(function() {
        function guardaEstadoTutorial(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        var tutorial=<?php echo json_encode($tutorial,JSON_PRETTY_PRINT)?>;
        var mostrar=tutorial.cuenta;
        $("#mostrarmodal").click(function(){
            mostrar=0;
            //guarda en bd
            guardaEstadoTutorial('<?php echo base_url()."aplicacion/guardaEstadoTutorial"?>',mostrar);
        });
        $(window).load(function(){
            if(mostrar==1){
                $('#modaltip').modal('show');
            }
        });

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
