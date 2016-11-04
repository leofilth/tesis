<?php include "navs/nav_edufisica.php"?>
<?php include "modal/modal_deporte.php" ?>
<!-- Modal -->
<div class="modal fade" id="modaltip" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="background-color: #673AB7">
                <div class="tip-modal">
                    <div class="margen-modal">
                        <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Modal Header</h4>
                        <p class="texto-modal-tip" id="descripcion-tip"></p>
                    </div>
                </div>
                <div class="triangulo"></div>
                <br>
                <img class="img-circle" width="20%" src="<?php echo base_url().'public/images/modal/student2.png'?>">
                <button type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal
            Tutorial Wambo
            -->
<div class="modal fade" id="tutorial" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="background-color: #673AB7">
                <div class="tip-modal">
                    <div class="margen-modal">
                        <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Hola <?php echo $datos->nick?></h4>
                        <h2 class="texto-modal-tip">Asi funciona Wambo Deportes</h2>
                        <div class="texto-modal-tip" id="descripcion-tip">
                            <div class="col-md-9">
                                <span class="glyphicon glyphicon-ok"></span> Obten monedas superando los desafíos Wambo Deportes
                            </div>
                            <div class="col-md-3">
                                <img class="center-block" width="50px" height="50px" src="<?php echo base_url()."public/images/icons/coins.png"?>">
                            </div>
                            <div class="col-md-9">
                                <span class="glyphicon glyphicon-ok"></span> Este es un desafío no completado
                            </div>
                            <div class="col-md-3">
                                <img  class="center-block" width="50px" height="50px" src="<?php echo base_url()."public/images/icons/test/test.png"?>">
                            </div>
                            <div class="col-md-9">
                                <span class="glyphicon glyphicon-ok"></span>  Este es un desafío completado
                            </div>
                            <div class="col-md-3">
                                <img class="center-block" width="50px" height="50px" src="<?php echo base_url()."public/images/icons/test/testHecho.png"?>">
                            </div>
                            <div class="col-md-9">
                                <span class="glyphicon glyphicon-ok"></span> Al comprar tu deporte esta se desbloquea cambiando de color
                            </div>
                            <div class="col-md-3">
                                <img class="gris center-block" width="50px" height="50px" src="<?php echo base_url()."public/images/icons/deporte/football.png"?>"><img class="center-block" width="50px" height="50px" src="<?php echo base_url()."public/images/icons/deporte/football.png"?>">
                            </div>
                        </div>
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
<div class="container-fluid" id="section1">
    <div  class="container">
        <h1 class="titulo1">El poder del deporte</h1>
        <div class="titulo5">Aquí encontrarás mucha información disponible para que aprendas, y cuando estes listo
            animate a superar el desafío Wambo Frutas!.</div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="instruccion-morado">
                            <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
                            <ol class="texto-modal-tip" id="descripcion-tip">
                                <li>Compra tu deporte</li>
                                <li>Haz click en ella</li>
                                <li>Aprende</li>
                            </ol>
                        </div>
                        <div style="float: left;margin-left: 50px;clear: left">
                            <div class="triangulo-morado"></div>
                        </div>
                        <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student2.png'?>">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <img width="150px" height="150px"  class="center-block fondocoins"
                             src="<?php echo base_url()."public/images/icons/coins.png";
                             ?>">
                        <p class="text-center"><span class="puntaje-seccion puntos"><?php echo $puntaje->puntos?></span></p>
                    </div>
                </div>
    </div>
    <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                        <?php
                        if($misdeportes!=null) {
                            $misdeportes_limpio = $this->mis_funciones->limpiaTuDeporte($misdeportes);
                            foreach ($deportes as $deporte) {
                                if (in_array($deporte->id, $misdeportes_limpio)) {
                                    ?>
                                    <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <img id="<?php echo $deporte->id ?>"
                                             title="<?php echo $deporte->nombre ?>"
                                             src="<?php echo base_url() . $deporte->link ?>"
                                             class="img-circle tamano fondofruta rotate center-block deporte borde"
                                             data-toggle="modal" data-target="#myModal">
                                    </div>
                                <?php } else {
                                    ?>
                                    <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <img id="<?php echo $deporte->id ?>"
                                             title="<?php echo $deporte->nombre ?>"
                                             src="<?php echo base_url() . $deporte->link ?>"
                                             class="img-circle tamano fondofruta rotate center-block gris borde"
                                             data-toggle="" data-target="">
                                    </div>
                                <?php }
                            }
                        }
                        else{
                            foreach ($deportes as $deporte) {
                                ?>
                                <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                    <img id="<?php echo $deporte->id ?>"
                                         title="<?php echo $deporte->nombre ?>"
                                         src="<?php echo base_url() . $deporte->link ?>"
                                         class="img-circle tamano fondofruta rotate center-block gris borde"
                                         data-toggle="" data-target="">
                                </div>
                            <?php }
                        }?>
                    </div>
                </div>
            </div>
</div>
<div class="container-fluid" id="section2">
    <div class="container">
        <h1>Desafío Deporte</h1>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="instruccion-verde">
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
                    <ol class="texto-modal-tip" id="descripcion-tip">
                        <li>Responde y gana puntos</li>
                        <li>Canjea por tus deporte </li>
                        <li>Demuestra todo lo que sabes</li>
                    </ol>
                </div>
                <div style="float: left;margin-left: 50px;clear: left">
                    <div class="triangulo-verde"></div>
                </div>
                <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student2.png'?>">
            </div>
            <div class="col-md-4 col-sm-4">
                <img width="150px" height="150px"  class="center-block fondocoins"
                     src="<?php echo base_url()."public/images/icons/coins.png";
                     ?>">
                <p class="text-center"><span class="puntaje-seccion puntos"><?php echo $puntaje->puntos?></span></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <?php include "tests/testdeporte.php"?>
                </div>
                <div id="cuestionario">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="tipsaludable">
    <div class="container">
        <h1>Tips saludables</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="instruccion-naranjo">
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Instrucciones</h4>
                    <ol class="texto-modal-tip" id="descripcion-tip">
                        <li>Selecciona tu TIP y aprende un poco mas</li>
                        <li>Son gratis :D</li>
                        <li></li>
                    </ol>
                </div>
                <div style="float: left;margin-left: 50px;clear: left">
                    <div class="triangulo-naranjo"></div>
                </div>
                <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student2.png'?>">
            </div>
        </div>
    </div>
    <div class="container" id="container-tip">
        <div class="row">
            <div class="col-md-12">
                <?php
                $i=0;
                $colores=array("verde","rosado","celeste","naranjo","rojo");
                foreach ($tipsDeportes as $tipdeporte){
                    ?>
                    <div class="col-md-3 col-xs-6 col-sm-4" style="height: 160px">
                        <div class="tip-<?php echo $colores[$i]?> tip zoom borde" title="<?php echo $tipdeporte->nombre?>" data-toggle="modal" data-target="#modaltip">
                            <div><h1 class="titulo-tip"><?php echo $tipdeporte->nombre?></h1></div><div><i class="glyphicon glyphicon-tint hoja"></i></div>
                        </div>
                    </div>
                    <?php $i++;
                    if($i==5){$i=0;}}?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"?>
<script>
    $(document).ready(function(){
        /**
         * Created by leon on 30-05-2016.
         */
        var puntos = <?php echo $puntaje->puntos?>;
        var deporte="Elige un Deporte o actividad";
        var desc="Te enseñare sobre ella";
        var titulo, titulo2;
        function guardaEstadoTutorial(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        var tutorial=<?php echo json_encode($tutorial,JSON_PRETTY_PRINT)?>;
        var mostrar=tutorial.seccion_deporte;
        $("#mostrarmodal").click(function(){
            mostrar=0;
            //guarda en bd
            guardaEstadoTutorial('<?php echo base_url()."aplicacion/guardaEstadoTutorialDeporte"?>',mostrar);
        });
        $(window).load(function(){
            if(mostrar==1){
                $('#tutorial').modal('show');
            }
        });
        function guardaCuestTemp(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        function guardaDeporte(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        function guardaPuntaje(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        function compra(){
            if(puntos <50){
                bootbox.alert({
                    size: "small",
                    title: "Puntos insuficientes",
                    message: "Consigue mas puntos…",
                    className: 'bb-alternate-modal',
                    callback: function(){ /* your callback code */ }
                })
            }
            else {
                var id = $(this).attr("id");
                var nombre = $(this).attr("title");
                bootbox.confirm({
                    size: 'small',
                    buttons: {
                        confirm: {
                            label: 'Si',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-danger'
                        }
                    },
                    //mesaage:'<p class="text-center">Please wait while we do something...</p>',
                    message: "<p class='text-center'>Seguro quieres comprar?.<br><p>" + nombre + " por 50 puntos<br>" + "Tus puntos actuales son: " + puntos,
                    callback: function (result) {
                        if (result) {
                            puntos = puntos - 50;
                            $(".puntos").text(puntos);
                            $("#" + id + ".gris").off();
                            $("#" + id).removeClass("gris");//quita color gris de la imagen
                            $("#" + id).off("click", compra);//quita evento compra
                            guardaDeporte('<?php echo base_url()."aplicacion/guardaDeporteUsuario"?>', id);
                            guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>', puntos);
                            //agrega clase fruta para ver en modal
                            $("#" + id).addClass("deporte");
                            $("#" + id + ".deporte").on("click", function () {
                                titulo = $(this).attr("title");
                                var link = $(this).attr("src");
                                var i;
                                for (i = 0; i < deportes.length; i++) {
                                    if (deportes[i].nombre == titulo) {
                                        $("#modal-descripcion").html(deportes[i].descripcion);
                                        $("#modal-title").text(titulo);
                                        $("#modalimg").attr("src", link);
                                        $("#modal-frecuencia").text(deportes[i].frecuencia);
                                        $("#modal-saludable").text(deportes[i].saludable);
                                        $("#modal-beneficios").html(deportes[i].beneficios);
                                        $("#modal-categoria").text(deportes[i].categoria);
                                    }
                                }

                            });
                            $("#" + id + ".deporte").on("mouseenter", function () {
                                var texto = $(this).attr("title");
                                $("#explica").text(texto);
                            });
                            $("#" + id + ".deporte").on("mouseleave", function () {
                                $("#explica").text(fruta);
                                $("#descripcion").text(desc);
                            });
                            $("#" + id).attr("data-toggle", "modal");
                            $("#" + id).attr("data-target", "#myModal");
                        }
                        else {
                            //bootbox.alert("tus puntos: " + puntos);
                        }
                    }
                });
            }
        }
        var deportes=<?php echo json_encode($deportes,JSON_PRETTY_PRINT)?>;//arreglo con todas las deportes
        var tips=<?php echo json_encode($tipsDeportes,JSON_PRETTY_PRINT)?>;//arreglo con todos los tipsDeportes
        $(".deporte").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica").text(texto);
            },
            click:function(){
                titulo=$(this).attr("title");
                var link=$(this).attr("src");
                var i;
                for(i=0;i<deportes.length;i++){
                    if(deportes[i].nombre == titulo){
                        $("#modal-descripcion").html(deportes[i].descripcion);
                        $("#modal-title").text(titulo);
                        $("#modalimg").attr("src",link);
                        $("#modal-consumo").text(deportes[i].consumo);
                        $("#modal-saludable").text(deportes[i].saludable);
                        $("#modal-beneficios").html(deportes[i].beneficios);
                        $("#modal-categoria").text(deportes[i].categoria);
                    }
                }
            },
            mouseleave:function(){
                $("#explica").text(deporte);
                $("#descripcion").text(desc);
            }
        });
        $(".cuest").on({
            click:function(){
                var cuestionario=$(this).attr("id");
                guardaCuestTemp('<?php echo base_url()."aplicacion/guardaCuestTemp"?>',cuestionario);
            }
        });
        $(".tip").on({
            click:function(){
                var titulo=$(this).attr("title");
                var i;
                for(i=0;i<tips.length;i++){
                    if(tips[i].nombre == titulo){
                        $("#descripcion-tip").text(tips[i].descripcion);
                        $("#titulo-tip").text(titulo);
                    }
                }
            }
        });
        /*
         Compra un deporte
         */
        $(".gris").on({
            click:compra,
            mouseenter:function(){
                titulo2=$(this).attr("title");
                $("#explica").text(titulo2);
            },
            mouseleave:function(){
                $("#explica").text(deporte);
                $("#descripcion").text(desc);
            }
        });
        /*
         fin compra fruta
         */
    });
</script>