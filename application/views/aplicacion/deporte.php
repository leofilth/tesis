<?php include "navs/nav_edufisica.php"?>
<?php include "modal/modal_deporte.php" ?>
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
                    <img class="img-border" alt="estudiante2" style="width:20%"  src="<?php echo base_url().'public/images/modal/student2.png'?>">
                </figure>
                <button type="button" class="btn btn-danger" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'" data-dismiss="modal">Cerrar</button>
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
                        <h4  class="modal-title titulo-modal-tip">Hola <?php echo $datos->nick?></h4>
                        <h2 class="texto-modal-tip">Asi funciona Wambo Deportes</h2>
                        <div class="texto-modal-tip">
                            <div class="col-md-8" id="textoIns">
                                <span class="glyphicon glyphicon-ok"></span> Haz click en el cuadro verde para siguiente ayuda
                            </div>
                            <div class="col-md-4 margenins" id="fotoIns">
                                <figure>
                                    <img class="center-block tamano100"  alt="ayuda" src="<?php echo base_url()."public/images/icons/customer-service.png"?>">
                                </figure>
                            </div>
                        </div>
                        <div class="contador">
                            <span id="contadorInstru">1</span>/7
                        </div>
                    </div>
                    <figure>
                        <img class=" animated infinite flash icon-click" alt="click" src="<?php echo base_url()."public/images/icons/click.png"?>">
                    </figure>
                </div>
                <div class="triangulo"></div>
                <br>
                <figure>
                    <img class="img-border icon-inst" alt="estudiante2" src="<?php echo base_url().'public/images/modal/student2.png'?>">
                </figure>
                <div style="margin-top: 55px">
                    <button id="mostrarmodal" type="button" class="btn btn-danger" style="position:absolute;bottom:10px;left:10px;margin:0;padding:10px 10px;font-family: 'finger paint'" data-dismiss="modal">No volver a mostar</button>
                    <button type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'" data-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="container-fluid padingtop" id="tipsaludable">
    <div class="container">
        <header class="tituloSection">Beneficios y Tips Wambo</header>
        <div class="row">
            <div class="col-md-8">
                <div class="instruefecto">
                    <div class="instruccion-naranjo">
                        <h4  class="modal-title titulo-modal-tip">Instrucciones</h4>
                        <ol class="texto-modal-tip">
                            <li>Selecciona tu TIP o Beneficio y aprende un poco más</li>
                            <li>Son gratis</li>
                            <li>Consulta cuando quieras</li>
                        </ol>
                    </div>
                    <div style="float: left;margin-left: 50px;clear: left">
                        <div class="triangulo-naranjo"></div>
                    </div>
                </div>
                <figure>
                    <img class="img-border pull-left icon-inst" alt="estudiante2" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student2.png'?>">
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
                foreach ($tipsDeportes as $tipdeporte){
                    ?>
                    <div class="col-md-3 col-xs-6 col-sm-4 alturatip">
                        <div class="tip-<?php echo $colores[$i]?> efecto-<?php echo $colores[$i]?> tip borde" title="<?php echo $tipdeporte->nombre?>" data-toggle="modal" data-target="#modaltip">
                            <div><h1 class="titulo-tip"><?php echo $tipdeporte->nombre?></h1></div><div><i class="glyphicon glyphicon-tint hoja"></i></div>
                        </div>
                    </div>
                    <?php $i++;
                    if($i==5){$i=0;}}?>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid  animated fadeIn" id="section1">
    <div  class="container">
        <header class="tituloSection">Deportes Wambo</header>
        <div class="titulo5">Aquí encontrarás mucha información disponible para que aprendas, y cuando estes listo
            animate a superar el desafío Wambo Deportes!.</div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="instruefecto">
                            <div class="instruccion-morado">
                                <h4  class="modal-title titulo-modal-tip">Instrucciones</h4>
                                <ol class="texto-modal-tip">
                                    <li>Compra tu Deporte</li>
                                    <li>Haz click en el</li>
                                    <li>Aprende</li>
                                </ol>
                            </div>
                            <div style="float: left;margin-left: 50px;clear: left">
                                <div class="triangulo-morado"></div>
                            </div>
                        </div>
                        <figure>
                            <img alt="estudiante2" class="img-border pull-left icon-inst" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student2.png'?>">
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
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                        <?php
                        if($misdeportes!=null) {
                            $misdeportes_limpio = $this->mis_funciones->limpiaTuDeporte($misdeportes);
                            foreach ($deportes as $deporte) {
                                if (in_array($deporte->id, $misdeportes_limpio)) {
                                    ?>
                                    <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <figure class="tool" data-toggle="tooltip" title="<?php echo $deporte->nombre ?>">
                                            <img id="<?php echo $deporte->id ?>"
                                                 title="<?php echo $deporte->nombre ?>"
                                                 alt="<?php echo $deporte->nombre ?>"
                                                 src="<?php echo base_url() . $deporte->link ?>"
                                                 class="img-border tamano fondofruta rotate center-block deporte borde"
                                                 data-toggle="modal" data-target="#myModal">
                                        </figure>
                                    </div>
                                <?php } else {
                                    ?>
                                    <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <figure class="tool" data-toggle="tooltip" title="<?php echo $deporte->nombre ?>">
                                            <img id="<?php echo $deporte->id ?>"
                                                 title="<?php echo $deporte->nombre ?>"
                                                 src="<?php echo base_url() . $deporte->link ?>"
                                                 alt="<?php echo $deporte->nombre ?>"
                                                 class="img-border tamano fondofruta rotate center-block gris borde"
                                                 data-toggle="" data-target="">
                                        </figure>
                                    </div>
                                <?php }
                            }
                        }
                        else{
                            foreach ($deportes as $deporte) {
                                ?>
                                <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                    <figure class="tool" data-toggle="tooltip" title="<?php echo $deporte->nombre ?>">
                                        <img id="<?php echo $deporte->id ?>"
                                             title="<?php echo $deporte->nombre ?>"
                                             src="<?php echo base_url() . $deporte->link ?>"
                                             alt="<?php echo $deporte->nombre ?>"
                                             class="img-border tamano fondofruta rotate center-block gris borde"
                                             data-toggle="" data-target="">
                                    </figure>
                                </div>
                            <?php }
                        }?>
                    </div>
                </div>
            </div>
    <div class="padingtop">
        <figure>
            <img alt="flechatop" class="ir-arriba animated infinite pulse center-block tamano" src="<?php echo base_url()."public/images/icons/up-arrow.png"?>">
        </figure>
    </div>
</section>
<section class="container-fluid" id="section2">
    <div class="container">
        <header class="tituloSection">Desafío Wambo</header>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="instruefecto">
                    <div class="instruccion-verde">
                        <h4  class="modal-title titulo-modal-tip">Instrucciones</h4>
                        <ol class="texto-modal-tip">
                            <li>Responde y gana puntos</li>
                            <li>Canjea por tus deporte </li>
                            <li>Demuestra todo lo que sabes</li>
                        </ol>
                    </div>
                    <div style="float: left;margin-left: 50px;clear: left">
                        <div class="triangulo-verde"></div>
                    </div>
                </div>
                <figure>
                    <img class="img-border pull-left icon-inst" alt="estudiante2" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student2.png'?>">
                </figure>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <?php include "tests/test_deporte.php" ?>
                </div>
                <div id="cuestionario">
                </div>
            </div>
        </div>
    </div>
    <div class="padingtop">
        <figure>
            <img alt="flechatop" class="ir-arriba animated infinite pulse center-block tamano" src="<?php echo base_url()."public/images/icons/up-arrow.png"?>">
        </figure>
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
        var avance=<?php echo $avance->avance_deporte?>;
        var tutorial=<?php echo json_encode($tutorial,JSON_PRETTY_PRINT)?>;
        var mostrar=tutorial.seccion_deporte;
        var contadorInfo=0;//contador para ir cambiando la info mediante clicks
        var informacion;//array con la informacion de un deporte
        var deportes=<?php echo json_encode($deportes,JSON_PRETTY_PRINT)?>;//arreglo con todas las deportes
        var tips=<?php echo json_encode($tipsDeportes,JSON_PRETTY_PRINT)?>;//arreglo con todos los tipsDeportes
        var contador=1;
        var instrucciones=[
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Haz click en el cuadro verde para siguiente ayuda",
                "imagen":"<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/customer-service.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Obten monedas superando los desafíos Wambo Deportes",
                "imagen":"<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/coins.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Este es un desafío <b>No Disponible</b>",
                "imagen":"<img  class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/test/testgris.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Este es un desafío <b>No Completado</b>",
                "imagen":"<img  class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/test/test.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Este es un desafío <b>Completado</b>",
                "imagen":"<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/test/testHecho.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Al comprar tu deporte este se desbloquea cambiando de color",
                "imagen":"<img class='animated rubberBand center-block tamanodep' src='<?php echo base_url().'public/images/icons/tutodeporte.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Cada deporte tiene un desafío asociado, cómpralo para desbloquearlo!",
                "imagen":"<img class='animated rubberBand center-block tamanodep' src='<?php echo base_url().'public/images/icons/desafiodeporte.png'?>'>"}
        ];

        function guardaEstadoTutorial(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        function guardaCuestDisp(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
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
        function actualizaAvance(ruta,valor1,valor2){
            $.post(ruta,{valor1:valor1,valor2:valor2},function(resp){
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
                    title: "Monedas insuficientes",
                    message: "<p class='compra'>Consigue monedas superando los desafíos Wambo</p>",
                    className: 'bb-alternate-modal',
                    callback: function(){ /* your callback code */ }
                })
            }
            else {
                var id = $(this).attr("id");
                var nombre = $(this).attr("title");
                var nombreminusculas=nombre.toLowerCase();
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
                    //mesaage:'<p class="text-center">Please wait while we do something...</p>',
                    message: "<p class='compra text-center'>¿Comprar "+"<strong>"+nombre+"</strong>"+" por 50 <img alt='coin' class='tamano32' src='<?php echo base_url().'public/images/icons/coin.png'?>'> ?</p><br>"+"<p class='compra text-center'>Monedas disponibles: "+"<strong>"+puntos+"</strong> <img alt='coins' class='tamano32' src='<?php echo base_url().'public/images/icons/coins.png'?>'></p>",
                    callback: function (result) {
                        if (result) {
                            puntos = puntos - 50;
                            $(".puntos").text(puntos);
                            $("#" + id + ".gris").off();
                            $("#" + id).removeClass("gris");//quita color gris de la imagen
                            $("#" + id).off("click", compra);//quita evento compra
                            guardaDeporte('<?php echo base_url()."aplicacion/guardaDeporteUsuario"?>', id);
                            //guarda cuestionario disponible
                            guardaCuestDisp('<?php echo base_url()."aplicacion/guardaCuestDispDeporte"?>',"cuestionario"+nombreminusculas);
                            $("#cuestionario" + nombreminusculas).removeClass("cuest-gris");//quita color gris al cuestionario seleccionado
                            $("#linkcuestionario" + nombreminusculas).attr("href",'<?php echo base_url()."aplicacion/cuestionariodep/"?>'+"cuestionario"+nombreminusculas);
                            guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>', puntos);
                            avance++;
                            console.log(nombreminusculas);
                            actualizaAvance('<?php echo base_url()."aplicacion/actualizaAvance"?>',avance,"deporte");
                            //agrega clase fruta para ver en modal
                            $("#" + id).addClass("deporte");
                            $("#" + id + ".deporte").on("click", function () {
                                titulo = $(this).attr("title");
                                var link = $(this).attr("src");
                                var i;
                                for (i = 0; i < deportes.length; i++) {
                                    if (deportes[i].nombre == titulo) {
                                        $("#modal-title").text(titulo);
                                        $("#modalimg").attr("src", link);
                                        informacion=[
                                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-info-sign glyfy'></span> Descripción","informacion":deportes[i].descripcion1},
                                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-question-sign glyfy'></span> Descripción","informacion":deportes[i].descripcion2},
                                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-heart glyfy'></span> Descripción","informacion":deportes[i].descripcion3},
                                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-star glyfy'></span> Descripción","informacion":deportes[i].descripcion4},
                                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-heart glyfy'></span> Descripción","informacion":deportes[i].descripcion5}
                                        ];
                                        $("#titulo").html("<span class='animated infinite pulse glyphicon glyphicon-info-sign glyfy'></span> Descripción");
                                        $("#info").html(deportes[i].descripcion1);
                                        contadorInfo++;
                                    }
                                }

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
        $(".deporte").on({
            click:function(){
                titulo=$(this).attr("title");
                var link=$(this).attr("src");
                var i;
                contadorInfo=0;//resetea al hacer click en un elemento
                for(i=0;i<deportes.length;i++){
                    if(deportes[i].nombre == titulo){
                        $("#modal-title").text(titulo);
                        $("#modalimg").attr("src",link);
                        informacion=[
                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-info-sign glyfy'></span> Descripción","informacion":deportes[i].descripcion1},
                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-question-sign glyfy'></span> Descripción","informacion":deportes[i].descripcion2},
                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-heart glyfy'></span> Descripción","informacion":deportes[i].descripcion3},
                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-star glyfy'></span> Descripción","informacion":deportes[i].descripcion4},
                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-heart glyfy'></span> Descripción","informacion":deportes[i].descripcion5}
                        ];
                        $("#titulo").html("<span class='animated infinite pulse glyphicon glyphicon-info-sign glyfy'></span> Descripción");
                        $("#info").html(deportes[i].descripcion1);
                        contadorInfo++;
                        /*$("#modal-descripcion").html(cereales[i].descripcion);
                         $("#modal-title").text(titulo);
                         $("#modalimg").attr("src",link);
                         $("#modal-consumo").text(cereales[i].consumo);
                         $("#modal-saludable").text(cereales[i].saludable);
                         $("#modal-beneficios").html(cereales[i].beneficios);
                         $("#modal-categoria").text(cereales[i].categoria);*/
                    }
                }
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
            click:compra
        });
        /*
         fin compra fruta
         */
        $("#instrumodal").on({
            click:function(){
                if(contador==7){
                    $("#textoIns").html(instrucciones[0].titulo);
                    $("#fotoIns").html(instrucciones[0].imagen);
                    contador=1;
                    $("#contadorInstru").text(contador);
                }
                else{

                    $("#textoIns").html(instrucciones[contador].titulo);
                    $("#fotoIns").html(instrucciones[contador].imagen);
                    contador++;
                    $("#contadorInstru").text(contador);
                }
            }
        });
        $("#informacion").on({
            click:function(){
                if(contadorInfo==5){
                    $("#titulo").html(informacion[0].titulo);
                    $("#info").html(informacion[0].informacion);
                    contadorInfo=1;
                    $("#contadorElemento").text(contadorInfo);
                }
                else{
                    $("#titulo").html(informacion[contadorInfo].titulo);
                    $("#info").html(informacion[contadorInfo].informacion);
                    contadorInfo++;
                    $("#contadorElemento").text(contadorInfo);
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
        $('#deportes').click(function(){
            $('body, html').animate({
                scrollTop: $('#section1').position().top}, 'slow');
        });
        $('#desafio').click(function(){
            $('body, html').animate({
                scrollTop: $('#section2').position().top}, 'slow');
        });
        $('[data-toggle="tooltip"]').tooltip();
        /*
         Efectos en los tips o secretos
         */
        $(".efecto-rojo").on({
            mouseenter: function(){
                $(this).addClass("animated jello infinite");
            },
            mouseleave:function() {
                $(this).removeClass("animated jello");
            }
        });
        $(".efecto-verde").on({
            mouseenter: function(){
                $(this).addClass("animated shake infinite");
            },
            mouseleave:function() {
                $(this).removeClass("animated shake");
            }
        });
        $(".efecto-naranjo").on({
            mouseenter: function(){
                $(this).addClass("animated tada infinite");
            },
            mouseleave:function() {
                $(this).removeClass("animated tada");
            }
        });
        $(".efecto-rosado").on({
            mouseenter: function(){
                $(this).addClass("animated swing infinite");
            },
            mouseleave:function() {
                $(this).removeClass("animated swing");
            }
        });
        $(".efecto-celeste").on({
            mouseenter: function(){
                $(this).addClass("animated rubberBand infinite");
            },
            mouseleave:function() {
                $(this).removeClass("animated rubberBand");
            }
        });
        /*
         fin efecto tips secretos
         */
    });
</script>