<?php include "navs/nav_alimentos.php"?>
<?php include "modal/modal_cereal.php" ?>
<!-- Modal -->
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
                    <img class="img-circle" alt="estudiante3" style="width: 20%" src="<?php echo base_url().'public/images/modal/student3.png'?>">
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
                        <h4 class="modal-title titulo-modal-tip">Hola <?php echo $datos->nick?></h4>
                        <h2 class="texto-modal-tip">Asi funciona Wambo Cereales</h2>
                        <div class="texto-modal-tip">
                            <div class="col-md-8" id="textoIns">
                                <span class="glyphicon glyphicon-ok"></span> Haz click en el cuadro verde para siguiente ayuda
                            </div>
                            <div class="col-md-4 margenins" id="fotoIns">
                                <figure>
                                    <img class="center-block tamano100" alt="ayuda" src="<?php echo base_url()."public/images/icons/customer-service.png"?>">
                                </figure>
                            </div>
                        </div>
                        <div class="contador">
                            <span id="contadorInstru">1</span>/5
                        </div>
                    </div>
                    <figure>
                        <img class="animated infinite flash icon-click" alt="click" src="<?php echo base_url()."public/images/icons/click.png"?>">
                    </figure>
                </div>
                <div class="triangulo"></div>
                <br>
                <figure>
                    <img class="img-border icon-inst" alt="estudiante3" src="<?php echo base_url().'public/images/modal/student3.png'?>">
                </figure>
                <div style="margin-top: 55px">
                    <button id="mostrarmodal" type="button" class="btn btn-danger" style="position:absolute;bottom:10px;left:10px;margin:0;padding:10px 10px;font-family: 'finger paint'" data-dismiss="modal">No volver a mostar</button>
                    <button type="button" class="btn btn-primary" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'" data-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="container-fluid padingtop animated fadeIn" id="section1">
    <div  class="container">
        <header data-aos="flip-up" class="tituloSection">Cereales Wambo</header>
        <p class="titulo5">Diviértete aprendiendo más sobre Cereales. Cuando te sientas preparado, anímate
            a superar los desafíos Wambo.
        </p>
        <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12 ">
                        <div data-aos="zoom-in" class="instruefecto">
                            <div class="instruccion-morado">
                                <h4 class="modal-title titulo-modal-tip">Instrucciones</h4>
                                <ol class="texto-modal-tip">
                                    <li>Elige un cereal y cómpralo</li>
                                    <li>Haz click en el</li>
                                    <li>Comienza a aprender</li>
                                </ol>
                            </div>
                            <div style="float: left;margin-left: 50px;clear: left">
                                <div class="triangulo-morado"></div>
                            </div>
                        </div>
                        <figure data-aos="zoom-out">
                            <img class="img-border pull-left icon-inst" alt="estudiante3" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student3.png'?>">
                        </figure>
                    </div>
                    <div data-aos="fade-up" class="col-md-4 col-sm-4 col-xs-12">
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
                        if($miscereales!=null) {
                            $miscereales_limpio = $this->mis_funciones->limpiaTuCereal($miscereales);
                            foreach ($cereales as $cereal) {
                                if (in_array($cereal->id, $miscereales_limpio)) {
                                    ?>
                                    <div data-aos="zoom-in" class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <figure class="tool" data-toggle="tooltip" title="<?php echo $cereal->nombre ?>">
                                            <img id="<?php echo $cereal->id ?>"
                                                 title="<?php echo $cereal->nombre ?>"
                                                 src="<?php echo base_url() . $cereal->link ?>"
                                                 alt="<?php echo $cereal->nombre ?>"
                                                 class="img-border tamano fondofruta rotate center-block cereal borde"
                                                 data-toggle="modal" data-target="#myModal">
                                        </figure>
                                    </div>
                                <?php } else {
                                    ?>
                                    <div data-aos="zoom-in"  class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <figure class="tool" data-toggle="tooltip" title="<?php echo $cereal->nombre ?>">
                                            <img id="<?php echo $cereal->id ?>"
                                                 title="<?php echo $cereal->nombre ?>"
                                                 src="<?php echo base_url() . $cereal->link ?>"
                                                 alt="<?php echo $cereal->nombre ?>"
                                                 class="img-border tamano fondofruta rotate center-block gris borde"
                                                 data-toggle="" data-target="">
                                        </figure>
                                    </div>
                                <?php }
                            }
                        }
                        else{
                            foreach ($cereales as $cereal) {
                                ?>
                                <div data-aos="zoom-in" class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                    <figure class="tool" data-toggle="tooltip" title="<?php echo $cereal->nombre ?>">
                                        <img id="<?php echo $cereal->id ?>"
                                             title="<?php echo $cereal->nombre ?>"
                                             src="<?php echo base_url() . $cereal->link ?>"
                                             alt="<?php echo $cereal->nombre ?>"
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
<section class="container-fluid" id="section2">
    <div class="container">
        <header data-aos="flip-up" class="tituloSection">Desafíos Wambo</header>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div data-aos="zoom-in" class="instruefecto">
                    <div class="instruccion-verde">
                        <h4 class="modal-title titulo-modal-tip">Instrucciones</h4>
                        <ol class="texto-modal-tip">
                            <li>Responde y gana puntos</li>
                            <li>Canjea por Cereales</li>
                            <li>Demuestra todo lo que sabes</li>
                        </ol>
                    </div>
                    <div style="float: left;margin-left: 50px;clear: left">
                        <div class="triangulo-verde"></div>
                    </div>
                </div>
                <figure data-aos="zoom-out">
                    <img class="img-border pull-left icon-inst" alt="estudiante3" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student3.png'?>">
                </figure>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div data-aos="zoom-in" class="col-md-8 col-md-offset-2">
                <div class="row">
                    <?php include "tests/test_cereal.php"?>
                </div>
            </div>
        </div>
    </div>
    <div class="padingtop">
        <img data-aos="fade-in" class="ir-arriba animated infinite pulse center-block tamano" alt="flechaTop" src="<?php echo base_url()."public/images/icons/up-arrow.png"?>">
    </div>
</section>
<section class="container-fluid" id="tipsaludable">
    <div class="container">
        <header data-aos="flip-up" class="tituloSection">Tips Wambo</header>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div data-aos="zoom-in" class="instruefecto">
                    <div class="instruccion-naranjo">
                        <h4 class="modal-title titulo-modal-tip">Instrucciones</h4>
                        <ol class="texto-modal-tip">
                            <li>Aquí tienes beneficios y secretos (son gratis)</li>
                            <li>Aprende un poco más</li>
                            <li>Consulta cuando quieras</li>
                        </ol>
                    </div>
                    <div style="float: left;margin-left: 50px;clear: left">
                        <div class="triangulo-naranjo"></div>
                    </div>
                </div>
                <figure data-aos="zoom-out">
                    <img class="img-border pull-left icon-inst" alt="estudiante3" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student3.png'?>">
                </figure>
            </div>
        </div>
    </div>
    <div class="container" id="container-tip">
        <div class="row">
            <div data-aos="zoom-in" class="col-md-12">
                <?php
                $i=0;
                $colores=array("verde","rosado","celeste","naranjo","rojo");
                foreach ($tipsCereales as $tipcereal){
                    ?>
                    <div data-aos="zoom-in" class="col-md-3 col-xs-6 col-sm-4 alturatip">
                        <div class="tip-<?php echo $colores[$i]?> efecto-<?php echo $colores[$i]?> tip borde" title="<?php echo $tipcereal->nombre?>" data-toggle="modal" data-target="#modaltip">
                            <div><h1 class="titulo-tip"><?php echo $tipcereal->nombre?></h1></div><div><i class="glyphicon glyphicon-tint hoja"></i></div>
                        </div>
                    </div>
                    <?php $i++;
                    if($i==5){$i=0;}}?>
            </div>
        </div>
    </div>
    <div class="padingtop">
        <img data-aos="fade-in" class="ir-arriba animated infinite pulse center-block tamano" alt="flechaTop" src="<?php echo base_url()."public/images/icons/up-arrow.png"?>">
    </div>
</section>
<?php include "footer.php"?>
<script>
    $(document).ready(function(){
        AOS.init({
            easing: 'ease-in-out-sine'
        });
        /**
         * Created by leon on 30-05-2016.
         */
        var puntos = <?php echo $puntaje->puntos?>;//puntos del usuario
        var titulo, titulo2;
        var avance=<?php echo $avance->avance_cereal?>;//avance seccion cereal
        var contadorInfo=0;//contador para ir cambiando la info mediante clicks
        var cereales=<?php echo json_encode($cereales,JSON_PRETTY_PRINT)?>;//arreglo con todas los cereales
        var tips=<?php echo json_encode($tipsCereales,JSON_PRETTY_PRINT)?>;//arreglo con todos los tipsCereales
        var informacion;//array con la informacion de un cereal
        var contador=1;//contador para las instrucciones
        var tutorial=<?php echo json_encode($tutorial,JSON_PRETTY_PRINT)?>;
        var mostrar=tutorial.seccion_cereal;
        /**
         * Instrucciones
         * @type {*[]}
         */
        var instrucciones=[
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Haz click en el cuadro verde para siguiente ayuda",
                "imagen":"<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/customer-service.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Obten monedas superando los desafíos Wambo Cereales",
                "imagen":"<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/coins.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Este es un desafío no completado",
                "imagen":"<img  class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/test/test.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Este es un desafío completado",
                "imagen":"<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/test/testHecho.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Al comprar tu cereal este se desbloquea cambiando de color",
                "imagen":"<img class='animated rubberBand center-block tamano100' src='<?php echo base_url().'public/images/icons/tutocer.png'?>'>"}
        ];
        function guardaEstadoTutorial(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        $("#mostrarmodal").click(function(){
            mostrar=0;
            //guarda en bd
            guardaEstadoTutorial('<?php echo base_url()."aplicacion/guardaEstadoTutorialCereal"?>',mostrar);
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
        function guardaCereal(ruta,valor){
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
                    message: "<p class='compra text-center'>¿Comprar "+"<strong>"+nombre+"</strong>"+" por 50 <img class='tamano32' src='<?php echo base_url().'public/images/icons/coin.png'?>'> ?</p><br>"+"<p class='compra text-center'>Monedas disponibles: "+"<strong>"+puntos+"</strong> <img class='tamano32' src='<?php echo base_url().'public/images/icons/coins.png'?>'></p>",
                    callback: function (result) {
                        if (result) {
                            puntos = puntos - 50;
                            $(".puntos").text(puntos);
                            $("#" + id + ".gris").off();
                            $("#" + id).removeClass("gris");//quita color gris de la imagen
                            $("#" + id).off("click", compra);//quita evento compra
                            guardaCereal('<?php echo base_url()."aplicacion/guardaCerealUsuario"?>', id);
                            guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>', puntos);
                            avance++;
                            actualizaAvance('<?php echo base_url()."aplicacion/actualizaAvance"?>',avance,"cereal");
                            //agrega clase cereal para ver en modal
                            $("#" + id).addClass("cereal");
                            $("#" + id + ".cereal").on("click", function () {
                                titulo = $(this).attr("title");
                                var link = $(this).attr("src");
                                var i;
                                for (i = 0; i < cereales.length; i++) {
                                    if (cereales[i].nombre == titulo) {
                                        $("#modal-title").text(titulo);
                                        $("#modalimg").attr("src", link);
                                        informacion=[
                                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-info-sign glyfy'></span> Descripción","informacion":cereales[i].descripcion1},
                                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-question-sign glyfy'></span> Descripción","informacion":cereales[i].descripcion2},
                                            {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-heart glyfy'></span> Descripción","informacion":cereales[i].descripcion3}
                                            ];
                                        $("#titulo").html("<span class='animated infinite pulse glyphicon glyphicon-info-sign glyfy'></span> Descripción");
                                        $("#info").html(cereales[i].descripcion1);
                                        contadorInfo++;
                                        /*$("#modal-descripcion").html(cereales[i].descripcion);
                                        $("#modal-title").text(titulo);
                                        $("#modalimg").attr("src", link);
                                        $("#modal-consumo").text(cereales[i].consumo);
                                        $("#modal-saludable").text(cereales[i].saludable);
                                        $("#modal-beneficios").html(cereales[i].beneficios);
                                        $("#modal-categoria").text(cereales[i].categoria);*/
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
        $(".cereal").on({
            click:function(){
                titulo=$(this).attr("title");
                var link=$(this).attr("src");
                var i;
                contadorInfo=0;//resetea al hacer click en un elemento
                $("#contadorElemento").text(1);
                for(i=0;i<cereales.length;i++){
                    if(cereales[i].nombre == titulo){
                        $("#modal-title").text(titulo);
                        $("#modalimg").attr("src",link);
                         informacion=[
                             {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-info-sign glyfy'></span> Descripción","informacion":cereales[i].descripcion1},
                             {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-question-sign glyfy'></span> Categoria","informacion":cereales[i].descripcion2},
                             {"titulo":"<span class='animated infinite pulse glyphicon glyphicon-heart glyfy'></span> Saludable","informacion":cereales[i].descripcion3}
                             ];
                        $("#titulo").html("<span class='animated infinite pulse glyphicon glyphicon-info-sign glyfy'></span> Descripción");
                        $("#info").html(cereales[i].descripcion1);
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
                        $("#descripcion-tip").text(tips[i].descripcion1);
                        $("#titulo-tip").text(titulo);
                    }
                }
            }
        });
        /*
         Compra un cereal
         */
        $(".gris").on({
            click:compra

        });
        /*
         fin compra cereal
         */
        $("#instrumodal").on({
            click:function(){
                if(contador==5){
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
                if(contadorInfo>=3){
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
        $('#tips').click(function(){
            $('body, html').animate({
                scrollTop: $('#tipsaludable').position().top}, 'slow');
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
