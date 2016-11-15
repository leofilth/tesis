<?php include "navs/nav_frutas.php"?>
<?php include "modal/modal_fruta.php" ?>
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
                <img class="img-circle" width="20%" src="<?php echo base_url().'public/images/modal/student1.png'?>">
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
                <div class="tip-modal" id="instrumodal" style="cursor: pointer">
                    <div class="margen-modal">
                        <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Hola <?php echo $datos->nick?></h4>
                        <h2 class="texto-modal-tip">Asi funciona Wambo Frutas</h2>
                        <div class="texto-modal-tip" id="descripcion-tip">
                                <div class="col-md-9" id="textoIns">
                                    <span class="glyphicon glyphicon-ok"></span> Haz click en el cuadro verde para siguiente ayuda
                                </div>
                                <div class="col-md-3" id="fotoIns">
                                    <img class="center-block tamano100"  src="<?php echo base_url()."public/images/icons/customer-service.png"?>">
                                </div>
                        </div>
                    </div>
                    <img class="icon-click" src="<?php echo base_url()."public/images/icons/click.png"?>">
                </div>
                <div class="triangulo"></div>
                <br>
                <img class="img-circle" width="20%" src="<?php echo base_url().'public/images/modal/student2.png'?>">
                <div style="margin-top: 55px">
                    <button id="mostrarmodal" type="button" class="btn btn-info" style="position:absolute;bottom:10px;left:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">No volver a mostar</button>
                    <button type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="section1">
    <div  class="container">
        <h1 class="tituloSection">frutas Wambo</h1>
        <div class="titulo5">Aquí encontrarás mucha información disponible para que aprendas, y cuando estes listo
            animate a superar el desafío Wambo Frutas!.</div>
        <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="instruccion-morado">
                            <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
                            <ol class="texto-modal-tip" id="descripcion-tip">
                                <li>Compra tu fruta</li>
                                <li>Haz click en ella</li>
                                <li>Aprende</li>
                            </ol>
                        </div>
                        <div style="float: left;margin-left: 50px;clear: left">
                            <div class="triangulo-morado"></div>
                        </div>
                        <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student1.png'?>">
                    </div>
                    <div class="col-md-4  col-sm-4 col-xs-12">
                        <img width="150px" height="150px"  class="center-block fondocoins"
                             src="<?php echo base_url()."public/images/icons/coins.png";
                             ?>">
                        <p class="text-center"><span class="puntaje-seccion puntos"><?php echo $puntaje->puntos?></span></p>
                    </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2  col-sm-12 col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                        <?php
                        if($misfrutas!=null) {
                            $misfrutas_limpio = $this->mis_funciones->limpiaTuFruta($misfrutas);
                            foreach ($frutas as $fruta) {
                                if (in_array($fruta->id, $misfrutas_limpio)) {
                                    ?>
                                    <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <img id="<?php echo $fruta->id ?>"
                                             title="<?php echo $fruta->nombre ?>"
                                             src="<?php echo base_url() . $fruta->link ?>"
                                             class="img-circle tamano fondofruta rotate center-block fruta borde"
                                             data-toggle="modal" data-target="#myModal">
                                    </div>
                                <?php } else {
                                    ?>
                                    <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <img id="<?php echo $fruta->id ?>"
                                             title="<?php echo $fruta->nombre ?>"
                                             src="<?php echo base_url() . $fruta->link ?>"
                                             class="img-circle tamano fondofruta rotate center-block gris borde"
                                             data-toggle="" data-target="">
                                    </div>
                                <?php }
                            }
                        }
                        else{
                        foreach ($frutas as $fruta) {
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                <img id="<?php echo $fruta->id ?>"
                                     title="<?php echo $fruta->nombre ?>"
                                     src="<?php echo base_url() . $fruta->link ?>"
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
        <h1 class="tituloSection">Desafio Wambo Frutas</h1>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="instruccion-verde">
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
                    <ol class="texto-modal-tip" id="descripcion-tip">
                        <li>Responde y gana puntos</li>
                        <li>Canjea por tus frutas </li>
                        <li>Demuestra todo lo que sabes</li>
                    </ol>
                </div>
                <div style="float: left;margin-left: 50px;clear: left">
                    <div class="triangulo-verde"></div>
                </div>
                <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student1.png'?>">
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
                    <?php include "tests/testfruta.php"?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="tipsaludable">
    <div class="container">
        <h1 class="tituloSection">Tips Wambo Frutas</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="instruccion-naranjo">
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Instrucciones</h4>
                    <ol class="texto-modal-tip" id="descripcion-tip">
                        <li>Selecciona tu TIP y aprende un poco más</li>
                        <li>Son gratis</li>
                        <li>Consulta cuando quieras</li>
                    </ol>
                </div>
                <div style="float: left;margin-left: 50px;clear: left">
                    <div class="triangulo-naranjo"></div>
                </div>
                <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student1.png'?>">
            </div>
        </div>
    </div>
    <div class="container" id="container-tip">
        <div class="row">
            <div class="col-md-12">
                <?php
                $i=0;
                $colores=array("verde","rosado","celeste","naranjo","rojo");
                foreach ($tipsFrutas as $tipfruta){
                    ?>
                    <div class="col-md-3 col-xs-6 col-sm-4" style="height: 160px">
                        <div class="tip-<?php echo $colores[$i]?> tip zoom borde" title="<?php echo $tipfruta->nombre?>" data-toggle="modal" data-target="#modaltip">
                            <div><h1 class="titulo-tip"><?php echo $tipfruta->nombre?></h1></div><div><i class="glyphicon glyphicon-apple hoja"></i></div>
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
        var fruta="Elige una Fruta";
        var desc="Te enseñare sobre ella";
        var titulo, titulo2;
        function guardaEstadoTutorial(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        var tutorial=<?php echo json_encode($tutorial,JSON_PRETTY_PRINT)?>;
        var mostrar=tutorial.seccion_fruta;
        $("#mostrarmodal").click(function(){
            mostrar=0;
            //guarda en bd
            guardaEstadoTutorial('<?php echo base_url()."aplicacion/guardaEstadoTutorialFruta"?>',mostrar);
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
        function guardaFruta(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        function guardaPuntaje(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        function cargaEnModal(){
            titulo=$(this).attr("title");
            var link=$(this).attr("src");
            var i;
            for(i=0;i<frutas.length;i++){
                if(frutas[i].nombre == titulo){
                    $("#modal-descripcion").html(frutas[i].descripcion);
                    $("#modal-title").text(titulo);
                    $("#modalimg").attr("src",link);
                    $("#modal-consumo").text(frutas[i].consumo);
                    $("#modal-saludable").text(frutas[i].saludable);
                    $("#modal-beneficios").html(frutas[i].beneficios);
                    $("#modal-categoria").text(frutas[i].categoria);
                }
            }
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
            else{
                var id = $(this).attr("id");
                var nombre=$(this).attr("title");
                bootbox.confirm({
                    size: 'medium',
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
                    message: "<p class='compra'>¿Comprar "+"<strong>"+nombre+"</strong>"+" por 50 <img class='tamano32' src='<?php echo base_url().'public/images/icons/coin.png'?>'> ?</p><br>"+"<p class='compra'>Tus puntos actuales son: "+"<strong>"+puntos+"</strong> <img class='tamano32' src='<?php echo base_url().'public/images/icons/coins.png'?>'></p>",
                    callback:function(result) {
                        if (result) {
                            puntos = puntos - 50;
                            $(".puntos").text(puntos);
                            $("#"+id +".gris").off();
                            $("#"+id).removeClass("gris");//quita color gris de la imagen
                            $("#"+id).off("click",compra);//quita evento compra
                            guardaFruta('<?php echo base_url()."aplicacion/guardaFrutaUsuario"?>',id);
                            guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>',puntos);
                            //agrega clase fruta para ver en modal
                            $("#"+id).addClass("fruta");
                            $("#"+id+".fruta").on("click",function(){
                                titulo=$(this).attr("title");
                                var link=$(this).attr("src");
                                var i;
                                for(i=0;i<frutas.length;i++){
                                    if(frutas[i].nombre == titulo){
                                        $("#modal-descripcion").html(frutas[i].descripcion);
                                        $("#modal-title").text(titulo);
                                        $("#modalimg").attr("src",link);
                                        $("#modal-consumo").text(frutas[i].consumo);
                                        $("#modal-saludable").text(frutas[i].saludable);
                                        $("#modal-beneficios").html(frutas[i].beneficios);
                                        $("#modal-categoria").text(frutas[i].categoria);
                                    }
                                }

                            });
                            $("#"+id+".fruta").on("mouseenter",function(){
                                var texto=$(this).attr("title");
                                $("#explica").text(texto);
                            });
                            $("#"+id+".fruta").on("mouseleave",function(){
                                $("#explica").text(fruta);
                                $("#descripcion").text(desc);
                            });
                            $("#"+id).attr("data-toggle","modal");
                            $("#"+id).attr("data-target","#myModal");
                        }
                        else {
                            //bootbox.alert("tus puntos: " + puntos);
                        }
                    }
                });
            }
        }
        var frutas=<?php echo json_encode($frutas,JSON_PRETTY_PRINT)?>;//arreglo con todas las frutas
        var tips=<?php echo json_encode($tipsFrutas,JSON_PRETTY_PRINT)?>;//arreglo con todos los tipsFrutas
        $(".fruta").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica").text(texto);
            },
            click:cargaEnModal,
            mouseleave:function(){
                $("#explica").text(fruta);
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
        $("#puntos").text(puntos);
        /**
        Compra una fruta
         */
        $(".gris").on({
            click:compra,
            mouseenter:function(){
                titulo2=$(this).attr("title");
                $("#explica").text(titulo2);
            },
            mouseleave:function(){
                $("#explica").text(fruta);
                $("#descripcion").text(desc);
            }
        });
        /**
        fin compra fruta
         */
        /**
         * Instrucciones
         * @type {*[]}
         */
        var instrucciones=[
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Click en siguiente para ayuda",
                "imagen":"<img class='center-block tamano100' src='<?php echo base_url().'public/images/icons/customer-service.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Obten monedas superando los desafíos Wambo Frutas",
                "imagen":"<img class='center-block tamano100' src='<?php echo base_url().'public/images/icons/coins.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Este es un desafío no completado",
                "imagen":"<img  class='center-block tamano100' src='<?php echo base_url().'public/images/icons/test/test.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Este es un desafío completado",
                "imagen":"<img class='center-block tamano100' src='<?php echo base_url().'public/images/icons/test/testHecho.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Al comprar tu fruta esta se desbloquea cambiando de color",
            "imagen":"<img class='gris center-block tamano100' src='<?php echo base_url().'public/images/icons/frutas/manzana.png'?>'><img class='center-block tamano100' src='<?php echo base_url().'public/images/icons/frutas/manzana.png'?>'>"}
        ];
        var contador=1;
        $("#instrumodal").on({
            click:function(){
                if(contador==5){
                    $("#textoIns").html(instrucciones[0].titulo);
                    $("#fotoIns").html(instrucciones[0].imagen);
                    contador=1;
                }
                else{

                    $("#textoIns").html(instrucciones[contador].titulo);
                    $("#fotoIns").html(instrucciones[contador].imagen);
                    contador++;
                }
            }
        });
    });
</script>
