<?php include "navs/nav_fruta_verdura.php" ?>
<?php include "modal/modal_fruta_verdura.php" ?>
<!-- Modal Tip-->
<div class="modal animated zoomInDown" id="modaltip" role="dialog">
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
                <figure>
                    <img class="img-border" alt="estudiante1" width="20%" src="<?php echo base_url().'public/images/modal/student1.png'?>">
                </figure>
                <button  type="button" class="btn btn-danger" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal
            Tutorial Wambo
            -->
<div class="modal animated fadeInDown" id="tutorial" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="background-color: #673AB7">
                <div class="tip-modal" id="instrumodal" style="cursor: pointer">
                    <div class="margen-modal">
                        <header id="titulo-tip" class="modal-title titulo-modal-tip">Hola <?php echo $datos->nick?></header>
                        <h2 class="texto-modal-tip">Asi funciona Wambo Frutas y Verduras</h2>
                        <div class="texto-modal-tip" id="descripcion-tip">
                                <div class="col-md-8" id="textoIns">
                                    <span class="glyphicon glyphicon-ok"></span> Haz click en el cuadro verde para siguiente ayuda
                                </div>
                                <div class="col-md-4 margenins" id="fotoIns">
                                    <figure>
                                        <img class="center-block tamano100" alt="iconoayuda" src="<?php echo base_url()."public/images/icons/customer-service.png"?>">
                                    </figure>
                                </div>
                        </div>
                    </div>
                    <figure>
                        <img class="animated infinite flash icon-click" alt="iconoclick" src="<?php echo base_url()."public/images/icons/click.png"?>">
                    </figure>
                </div>
                <div class="triangulo"></div>
                <br>
                <figure>
                    <img class="img-border icon-inst" alt="estudiante2" src="<?php echo base_url().'public/images/modal/student2.png'?>">
                </figure>
                <div style="margin-top: 55px">
                    <button id="mostrarmodal" type="button" class="btn btn-danger" style="position:absolute;bottom:10px;left:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">No volver a mostar</button>
                    <button type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="container-fluid padingtop" id="section1">
    <div  class="container">
        <header class="tituloSection">frutas y verduras Wambo</header>
        <p class="titulo5">Aquí encontrarás mucha información disponible para que aprendas, y cuando estes listo
            animate a superar el desafío Wambo Frutas!.
        </p>
        <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="instruefecto">
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
                        </div>
                        <figure>
                            <img class="img-border pull-left icon-inst" alt="estudiante1" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student1.png'?>">
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="animated infinite bounce">
                            <figure>
                                <img class="center-block fondocoins"
                                     alt="coins" src="<?php echo base_url()."public/images/icons/coins.png";
                                ?>">
                            </figure>
                            <p class="text-center">
                                <span class="puntaje-seccion puntos">
                                    <?php echo $puntaje->puntos?>
                                </span>
                            </p>
                        </div>
                    </div>
        </div>
    </div>
    <div class="container animated flash">
        <div class="row">
            <div class="col-md-10 col-md-offset-1  col-sm-12 col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                        <?php
                        if($misfrutas!=null) {
                            $misfrutas_limpio = $this->mis_funciones->limpiaTuFruta($misfrutas);
                            foreach ($frutas as $fruta) {
                                if (in_array($fruta->id, $misfrutas_limpio)) {
                                    ?>
                                    <div class="col-md-2 col-sm-2 col-xs-3" style="padding-bottom: 10px">
                                        <figure  class="tool" data-toggle="tooltip" title="<?php echo $fruta->nombre ?>">
                                            <img id="<?php echo $fruta->id ?>"
                                                 title="<?php echo $fruta->nombre ?>"
                                                 src="<?php echo base_url() . $fruta->link ?>"
                                                 alt="<?php echo $fruta->nombre ?>"
                                                 class="img-border tamano fondofruta rotate center-block fruta borde"
                                                 data-toggle="modal" data-target="#myModal"
                                                >
                                        </figure>
                                    </div>
                                <?php } else {
                                    ?>
                                    <div class="col-md-2 col-sm-2 col-xs-3" style="padding-bottom: 10px">
                                        <figure class="tool" data-toggle="tooltip" title="<?php echo $fruta->nombre ?>">
                                            <img id="<?php echo $fruta->id ?>"
                                                 title="<?php echo $fruta->nombre ?>"
                                                 alt="<?php echo $fruta->nombre ?>"
                                                 src="<?php echo base_url() . $fruta->link ?>"
                                                 class="img-border tamano fondofruta rotate center-block gris borde"
                                                 data-toggle="" data-target="">
                                        </figure>
                                    </div>
                                <?php }
                            }
                        }
                        else{
                        foreach ($frutas as $fruta) {
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                <figure class="tool" data-toggle="tooltip" title="<?php echo $fruta->nombre ?>">
                                    <img id="<?php echo $fruta->id ?>"
                                         title="<?php echo $fruta->nombre ?>"
                                         src="<?php echo base_url() . $fruta->link ?>"
                                         alt="<?php echo $fruta->nombre ?>"
                                         class="img-border tamano fondofruta rotate center-block gris borde"
                                         data-toggle="" data-target="">
                                </figure>
                            </div>
                        <?php }
                        }?>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid animated fadeIn" id="section2">
    <div class="container">
        <header class="tituloSection">Desafio Wambo Frutas y Verduras</header>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="instruefecto">
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
                </div>
                <figure>
                    <img class="img-border pull-left icon-inst" alt="estudiante1" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student1.png'?>">
                </figure>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <?php include "tests/test_fruta_verdura.php" ?>
                </div>
            </div>
        </div>
    </div>
    <div class="padingtop">
        <img class="ir-arriba animated infinite pulse center-block tamano" src="<?php echo base_url()."public/images/icons/up-arrow.png"?>">
    </div>
</section>
<section class="container-fluid" id="tipsaludable">
    <div class="container">
        <header class="tituloSection">Tips Wambo Frutas y Verduras</header>
        <div class="row">
            <div class="col-md-8">
                <div class="instruefecto">
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
                </div>
                <figure>
                    <img class="img-border pull-left icon-inst" alt="estudiante1" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student1.png'?>">
                </figure>
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
                    <div class="col-md-3 col-xs-6 col-sm-4 alturatip">
                        <div class="tip-<?php echo $colores[$i]?> tip animated infinite pulse borde" title="<?php echo $tipfruta->nombre?>" data-toggle="modal" data-target="#modaltip">
                            <div><h1 class="titulo-tip"><?php echo $tipfruta->nombre?></h1></div><div><i class="glyphicon glyphicon-apple hoja"></i></div>
                        </div>
                    </div>
                    <?php $i++;
                    if($i==5){$i=0;}}?>
            </div>
        </div>
    </div>
    <div class="padingtop">
        <img class="ir-arriba animated infinite pulse center-block tamano" src="<?php echo base_url()."public/images/icons/up-arrow.png"?>">
    </div>
</section>
<?php include "footer.php"?>
<script>
    $(document).ready(function(){
        /**
         * Created by leon on 30-05-2016.
         */
        var puntos = <?php echo $puntaje->puntos?>;
        var titulo, titulo2;
        var avance=<?php echo $avance->avance_fruta?>;
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
        function actualizaAvance(ruta,valor1,valor2){
            $.post(ruta,{valor1:valor1,valor2:valor2},function(resp){
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
                    title: "Monedas insuficientes",
                    message: "<p class='compra'>Consigue monedas superando los desafíos Wambo</p>",
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
                    message: "<p class='compra text-center'>¿Comprar "+"<strong>"+nombre+"</strong>"+" por 50 <img class='tamano32' src='<?php echo base_url().'public/images/icons/coin.png'?>'> ?</p><br>"+"<p class='compra text-center'>Monedas disponibles: "+"<strong>"+puntos+"</strong> <img class='tamano32' src='<?php echo base_url().'public/images/icons/coins.png'?>'></p>",
                    callback:function(result) {
                        if (result) {
                            puntos = puntos - 50;
                            $(".puntos").text(puntos);
                            $("#"+id +".gris").off();
                            $("#"+id).removeClass("gris");//quita color gris de la imagen
                            $("#"+id).off("click",compra);//quita evento compra
                            guardaFruta('<?php echo base_url()."aplicacion/guardaFrutaUsuario"?>',id);
                            guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>',puntos);
                            avance++;
                            actualizaAvance('<?php echo base_url()."aplicacion/actualizaAvance"?>',avance,"fruta");
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

            click:cargaEnModal
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
        Compra una fruta y verdura
         */
        $(".gris").on({
            click:compra
        });
        /**
        fin compra fruta y verdura
         */
        /**
         * Instrucciones
         * @type {*[]}
         */
        var instrucciones=[
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Click en siguiente para ayuda",
                "imagen":"<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/customer-service.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Obten monedas superando los desafíos Wambo Frutas y Verduras",
                "imagen":"<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/coins.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Este es un desafío no completado",
                "imagen":"<img  class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/test/test.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Este es un desafío completado",
                "imagen":"<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/test/testHecho.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Al comprar tu fruta o verdura esta se desbloquea cambiando de color",
            "imagen":"<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/tutofruta.png'?>'>"}
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
        $(".icon-inst").on({
            mouseenter: function(){
                $(this).addClass("animated jello");
            },
            mouseleave:function(){
                $(this).removeClass("animated jello");
            }
        });
        $(".instruefecto").on({
            mouseenter: function(){
                $(this).addClass("animated bounce");
            },
            mouseleave:function(){
                $(this).removeClass("animated bounce");
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
        $('.ir-arriba').click(function(){
            $('body, html').animate({
                scrollTop: '0px'
            },1000 );
        });
        $('#tips').click(function(){
            $('body, html').animate({
                scrollTop: $('#tipsaludable').position().top}, 'slow');
        });
        $('#desafio').click(function(){
            $('body, html').animate({
                scrollTop: $('#section2').position().top}, 'slow');
        });
        /**
         * Tooltip para las frutas y verduras
         */
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
