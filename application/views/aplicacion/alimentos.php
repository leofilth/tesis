<?php include "navs/nav_alimentos.php"?>
<?php include "modal/modal_alimento.php" ?>
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
                <img class="img-circle" width="20%" src="<?php echo base_url().'public/images/modal/student4.png'?>">
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
                        <h2 class="texto-modal-tip">Asi funciona Wambo Alimentos</h2>
                        <div class="texto-modal-tip" id="descripcion-tip">
                            <div class="col-md-9">
                                <span class="glyphicon glyphicon-ok"></span> Obten monedas superando los desafíos Wambo Alimentos
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
                                <span class="glyphicon glyphicon-ok"></span> Este es un desafío completado
                            </div>
                            <div class="col-md-3">
                                <img class="center-block" width="50px" height="50px" src="<?php echo base_url()."public/images/icons/test/testHecho.png"?>">
                            </div>
                            <div class="col-md-9">
                                <span class="glyphicon glyphicon-ok"></span> Al comprar tu alimento este se desbloquea cambiando de color
                            </div>
                            <div class="col-md-3">
                                <img class="gris center-block" width="50px" height="50px" src="<?php echo base_url()."public/images/icons/food/donuts.png"?>"><img class="center-block" width="50px" height="50px" src="<?php echo base_url()."public/images/icons/food/donuts.png"?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="triangulo"></div>
                <br>
                <img class="img-circle" width="20%" src="<?php echo base_url().'public/images/modal/student4.png'?>">
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
        <h1 class="tituloSection">Alimentos Wambo</h1>
        <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="instruccion-morado">
                            <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
                            <ol class="texto-modal-tip" id="descripcion-tip">
                                <li>Compra tu alimento</li>
                                <li>Haz click en ella</li>
                                <li>Aprende</li>
                            </ol>
                        </div>
                        <div style="float: left;margin-left: 50px;clear: left">
                            <div class="triangulo-morado"></div>
                        </div>
                        <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student4.png'?>">
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
                        if($misalimentos!=null) {
                            $misalimentos_limpio = $this->mis_funciones->limpiaTuAlimento($misalimentos);
                            foreach ($alimentos as $alimento) {
                                if (in_array($alimento->id, $misalimentos_limpio)) {
                                    ?>
                                    <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <img id="<?php echo $alimento->id ?>"
                                             title="<?php echo $alimento->nombre ?>"
                                             src="<?php echo base_url() . $alimento->link ?>"
                                             class="img-circle tamano fondofruta rotate center-block alimento borde"
                                             data-toggle="modal" data-target="#myModal">
                                    </div>
                                <?php } else {
                                    ?>
                                    <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <img id="<?php echo $alimento->id ?>"
                                             title="<?php echo $alimento->nombre ?>"
                                             src="<?php echo base_url() . $alimento->link ?>"
                                             class="img-circle tamano fondofruta rotate center-block gris borde"
                                             data-toggle="" data-target="">
                                    </div>
                                <?php }
                            }
                        }
                        else{
                            foreach ($alimentos as $alimento) {
                                ?>
                                <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                    <img id="<?php echo $alimento->id ?>"
                                         title="<?php echo $alimento->nombre ?>"
                                         src="<?php echo base_url() . $alimento->link ?>"
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
        <h1 class="tituloSection">Desafíos Wambo alimentos</h1>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="instruccion-verde">
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
                    <ol class="texto-modal-tip" id="descripcion-tip">
                        <li>Responde y gana puntos</li>
                        <li>Canjea por tus alimentos </li>
                        <li>Demuestra todo lo que sabes</li>
                    </ol>
                </div>
                <div style="float: left;margin-left: 50px;clear: left">
                    <div class="triangulo-verde"></div>
                </div>
                <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student4.png'?>">
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
                    <?php include "tests/testalimento.php"?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="tipsaludable">
    <div class="container">
        <h1 class="tituloSection">Tips Wambo Alimentos</h1>
        <div class="row">
            <div class="col-md-8 col-sm-8">
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
                <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student4.png'?>">
            </div>
        </div>
    </div>
    <div class="container" id="container-tip">
        <div class="row">
            <div class="col-md-12">
                <?php
                $i=0;
                $colores=array("verde","rosado","celeste","naranjo","rojo");
                foreach ($tipsAlimentos as $tipalimento){
                    ?>
                    <div class="col-md-3 col-xs-6 col-sm-4" style="height: 160px">
                        <div class="tip-<?php echo $colores[$i]?> tip zoom borde" title="<?php echo $tipalimento->nombre?>" data-toggle="modal" data-target="#modaltip">
                            <div><h1 class="titulo-tip"><?php echo $tipalimento->nombre?></h1></div><div><i class="glyphicon glyphicon-tint hoja"></i></div>
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
        var alimento="Elige un alimento";
        var desc="Te enseñare sobre el";
        var titulo, titulo2;
        function guardaEstadoTutorial(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        var tutorial=<?php echo json_encode($tutorial,JSON_PRETTY_PRINT)?>;
        var mostrar=tutorial.seccion_alimento;
        $("#mostrarmodal").click(function(){
            mostrar=0;
            //guarda en bd
            guardaEstadoTutorial('<?php echo base_url()."aplicacion/guardaEstadoTutorialAlimento"?>',mostrar);
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
        function guardaAlimento(ruta,valor){
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
                            guardaAlimento('<?php echo base_url()."aplicacion/guardaAlimentoUsuario"?>', id);
                            guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>', puntos);
                            //agrega clase fruta para ver en modal
                            $("#" + id).addClass("alimento");
                            $("#" + id + ".alimento").on("click", function () {
                                titulo = $(this).attr("title");
                                var link = $(this).attr("src");
                                var i;
                                for (i = 0; i < alimentos.length; i++) {
                                    if (alimentos[i].nombre == titulo) {
                                        $("#modal-descripcion").html(alimentos[i].descripcion);
                                        $("#modal-title").text(titulo);
                                        $("#modalimg").attr("src", link);
                                        $("#modal-consumo").text(alimentos[i].consumo);
                                        $("#modal-saludable").text(alimentos[i].saludable);
                                        $("#modal-beneficios").html(alimentos[i].beneficios);
                                        $("#modal-categoria").text(alimentos[i].categoria);
                                    }
                                }

                            });
                            $("#" + id + ".alimento").on("mouseenter", function () {
                                var texto = $(this).attr("title");
                                $("#explica").text(texto);
                            });
                            $("#" + id + ".alimento").on("mouseleave", function () {
                                $("#explica").text(alimento);
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
        var alimentos=<?php echo json_encode($alimentos,JSON_PRETTY_PRINT)?>;//arreglo con todas las frutas
        var tips=<?php echo json_encode($tipsAlimentos,JSON_PRETTY_PRINT)?>;//arreglo con todos los tipsFrutas
        $(".alimento").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica").text(texto);
            },
            click:function(){
                titulo=$(this).attr("title");
                var link=$(this).attr("src");
                var i;
                for(i=0;i<alimentos.length;i++){
                    if(alimentos[i].nombre == titulo){
                        $("#modal-descripcion").html(alimentos[i].descripcion);
                        $("#modal-title").text(titulo);
                        $("#modalimg").attr("src",link);
                        $("#modal-consumo").text(alimentos[i].consumo);
                        $("#modal-saludable").text(alimentos[i].saludable);
                        $("#modal-beneficios").html(alimentos[i].beneficios);
                        $("#modal-categoria").text(alimentos[i].categoria);
                    }
                }
            },
            mouseleave:function(){
                $("#explica").text(alimento);
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
         Compra un alimento
         */
        $(".gris").on({
            click:compra,
            mouseenter:function(){
                titulo2=$(this).attr("title");
                $("#explica").text(titulo2);
            },
            mouseleave:function(){
                $("#explica").text(alimento);
                $("#descripcion").text(desc);
            }
        });
        /*
         fin compra fruta
         */
    });
</script>
