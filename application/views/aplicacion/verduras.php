<?php include "navs/nav_verduras.php"?>
<?php include "modal/modal_verdura.php" ?>
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
                <figure>
                    <img class="img-circle" width="20%" alt="estudiante3" src="<?php echo base_url().'public/images/modal/student3.png'?>">
                </figure>
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
                        <h2 class="texto-modal-tip">Asi funciona Wambo Verduras</h2>
                        <div class="texto-modal-tip" id="descripcion-tip">
                            <div class="col-md-8" id="textoIns">
                                <span class="glyphicon glyphicon-ok"></span> Haz click en el cuadro verde para siguiente ayuda
                            </div>
                            <div class="col-md-4 margenins" id="fotoIns">
                                <figure>
                                    <img class="center-block tamano100"  alt="iconoayuda" src="<?php echo base_url()."public/images/icons/customer-service.png"?>">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <figure>
                        <img class="icon-click" alt="imagenClick" src="<?php echo base_url()."public/images/icons/click.png"?>">
                    </figure>
                </div>
                <div class="triangulo"></div>
                <br>
                <figure>
                    <img class="img-circle icon-inst" alt="estudiante3" src="<?php echo base_url().'public/images/modal/student3.png'?>">
                </figure>
                <div style="margin-top: 55px">
                    <button id="mostrarmodal" type="button" class="btn btn-info" style="position:absolute;bottom:10px;left:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">No volver a mostar</button>
                    <button type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="container-fluid padingtop" id="section1">
    <div  class="container">
        <header class="tituloSection">Verduras Wambo</header>
        <div class="row">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="instruccion-morado">
                            <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
                            <ol class="texto-modal-tip" id="descripcion-tip">
                                <li>Compra tu verdura</li>
                                <li>Haz click en ella</li>
                                <li>Aprende</li>
                            </ol>
                        </div>
                        <div style="float: left;margin-left: 50px;clear: left">
                            <div class="triangulo-morado"></div>
                        </div>
                        <figure>
                            <img class="img-circle pull-left icon-inst" alt="estudiante3" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student3.png'?>">
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <figure>
                            <img class="center-block fondocoins"
                                 alt="coins" src="<?php echo base_url()."public/images/icons/coins.png";
                            ?>">
                        </figure>
                        <p class="text-center"><span class="puntaje-seccion puntos"><?php echo $puntaje->puntos?></span></p>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2" style="padding-bottom: 10px;padding-top: 10px">
                        <?php
                        if($misverduras!=null) {
                            $misverduras_limpio = $this->mis_funciones->limpiaTuVerdura($misverduras);
                            foreach ($verduras as $verdura) {
                                if (in_array($verdura->id, $misverduras_limpio)) {
                                    ?>
                                    <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <figure>
                                            <img id="<?php echo $verdura->id ?>"
                                                 title="<?php echo $verdura->nombre ?>"
                                                 src="<?php echo base_url() . $verdura->link ?>"
                                                 class="img-circle tamano fondofruta rotate center-block verdura borde"
                                                 data-toggle="modal" data-target="#myModal"
                                                alt="<?php echo "imagen".$verdura->nombre ?>">
                                        </figure>
                                    </div>
                                <?php } else {
                                    ?>
                                    <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                       <figure>
                                           <img id="<?php echo $verdura->id ?>"
                                                title="<?php echo $verdura->nombre ?>"
                                                src="<?php echo base_url() . $verdura->link ?>"
                                                class="img-circle tamano fondofruta rotate center-block gris borde"
                                                data-toggle="" data-target=""
                                               alt="<?php echo "imagen".$verdura->nombre ?>">
                                       </figure>
                                    </div>
                                <?php }
                            }
                        }
                        else{
                            foreach ($verduras as $verdura) {
                                ?>
                                <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                    <figure>
                                        <img id="<?php echo $verdura->id ?>"
                                             title="<?php echo $verdura->nombre ?>"
                                             src="<?php echo base_url() . $verdura->link ?>"
                                             class="img-circle tamano fondofruta rotate center-block gris borde"
                                             data-toggle="" data-target=""
                                            alt="<?php echo "imagen".$verdura->nombre ?>">
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
        <header class="tituloSection">Desafío Wambo Verduras</header>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="instruccion-verde">
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
                    <ol class="texto-modal-tip" id="descripcion-tip">
                        <li>Responde y gana puntos</li>
                        <li>Canjea por tus verduras </li>
                        <li>Demuestra todo lo que sabes</li>
                    </ol>
                </div>
                <div style="float: left;margin-left: 50px;clear: left">
                    <div class="triangulo-verde"></div>
                </div>
                <figure>
                    <img class="img-circle pull-left icon-inst" alt="estudiante3" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student3.png'?>">
                </figure>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                <?php include "tests/testverdura.php"?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid" id="tipsaludable">
    <div class="container">
        <header class="tituloSection">Tips Wambo Verduras</header>
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
                <figure>
                    <img class="img-circle pull-left icon-inst" alt="estudiante3" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student3.png'?>">
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
                foreach ($tipsVerduras as $tipverdura){
                    ?>
                    <div class="col-md-3 col-xs-6 col-sm-4 alturatip">
                        <div class="tip-<?php echo $colores[$i]?> tip zoom borde" title="<?php echo $tipverdura->nombre?>" data-toggle="modal" data-target="#modaltip">
                            <div><h1 class="titulo-tip"><?php echo $tipverdura->nombre?></h1></div><div><i class="glyphicon glyphicon-leaf hoja"></i></div>
                        </div>
                    </div>
                    <?php $i++;
                    if($i==5){$i=0;}}?>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"?>
<script>
    $(document).ready(function(){
        /**
         * Created by leon on 30-05-2016.
         */
        var puntos = <?php echo $puntaje->puntos?>;
        var verdura="Elige una Verdura";
        var desc="Te enseñare sobre ella";
        var titulo, titulo2;
        var avance=<?php echo $avance->avance_verdura?>;
        function guardaEstadoTutorial(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        var tutorial=<?php echo json_encode($tutorial,JSON_PRETTY_PRINT)?>;
        var mostrar=tutorial.seccion_verdura;
        $("#mostrarmodal").click(function(){
            mostrar=0;
            //guarda en bd
            guardaEstadoTutorial('<?php echo base_url()."aplicacion/guardaEstadoTutorialVerdura"?>',mostrar);
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
        function guardaCuestTemp(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        function guardaVerdura(ruta,valor){
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
                    message: "<p class='compra'>¿Comprar "+"<strong>"+nombre+"</strong>"+" por 50 <img class='tamano32' src='<?php echo base_url().'public/images/icons/coin.png'?>'> ?</p><br>"+"<p class='compra'>Tus puntos actuales son: "+"<strong>"+puntos+"</strong> <img class='tamano32' src='<?php echo base_url().'public/images/icons/coins.png'?>'></p>",
                    callback: function (result) {
                        if (result) {
                            puntos = puntos - 50;
                            $(".puntos").text(puntos);
                            $("#" + id + ".gris").off();
                            $("#" + id).removeClass("gris");//quita color gris de la imagen
                            $("#" + id).off("click", compra);//quita evento compra
                            guardaVerdura('<?php echo base_url()."aplicacion/guardaVerduraUsuario"?>', id);
                            guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>', puntos);
                            avance++;
                            actualizaAvance('<?php echo base_url()."aplicacion/actualizaAvance"?>',avance,"verdura");
                            //agrega clase verdura para ver en modal
                            $("#" + id).addClass("verdura");
                            $("#" + id + ".verdura").on("click", function () {
                                titulo = $(this).attr("title");
                                var link = $(this).attr("src");
                                var i;
                                for (i = 0; i < verduras.length; i++) {
                                    if (verduras[i].nombre == titulo) {
                                        $("#modal-descripcion").html(verduras[i].descripcion);
                                        $("#modal-title").text(titulo);
                                        $("#modalimg").attr("src", link);
                                        $("#modal-consumo").text(verduras[i].consumo);
                                        $("#modal-saludable").text(verduras[i].saludable);
                                        $("#modal-beneficios").html(verduras[i].beneficios);
                                        $("#modal-categoria").text(verduras[i].categoria);
                                    }
                                }

                            });
                            $("#" + id + ".verdura").on("mouseenter", function () {
                                var texto = $(this).attr("title");
                                $("#explica").text(texto);
                            });
                            $("#" + id + ".verdura").on("mouseleave", function () {
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
        var verduras=<?php echo json_encode($verduras,JSON_PRETTY_PRINT)?>;//arreglo con todas las verduras
        var tips=<?php echo json_encode($tipsVerduras,JSON_PRETTY_PRINT)?>;//arreglo con todos los tipsVerduras
        $(".verdura").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica").text(texto);
            },
            click:function(){
                titulo=$(this).attr("title");
                var link=$(this).attr("src");
                var i;
                for(i=0;i<verduras.length;i++){
                    if(verduras[i].nombre == titulo){
                        $("#modal-descripcion").html(verduras[i].descripcion);
                        $("#modal-title").text(titulo);
                        $("#modalimg").attr("src",link);
                        $("#modal-consumo").text(verduras[i].consumo);
                        $("#modal-saludable").text(verduras[i].saludable);
                        $("#modal-beneficios").html(verduras[i].beneficios);
                        $("#modal-categoria").text(verduras[i].categoria);
                    }
                }
            },
            mouseleave:function(){
                $("#explica").text(verdura);
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
         Compra una fruta
         */
        $(".gris").on({
            click:compra,
            mouseenter:function(){
                titulo2=$(this).attr("title");
                $("#explica").text(titulo2);
            },
            mouseleave:function(){
                $("#explica").text(verdura);
                $("#descripcion").text(desc);
            }
        });
        /*
         fin compra fruta
         */
        /**
         * Instrucciones
         * @type {*[]}
         */
        var instrucciones=[
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Click en siguiente para ayuda",
                "imagen":"<img class='center-block tamano100' src='<?php echo base_url().'public/images/icons/customer-service.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Obten monedas superando los desafíos Wambo Verduras",
                "imagen":"<img class='center-block tamano100' src='<?php echo base_url().'public/images/icons/coins.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Este es un desafío no completado",
                "imagen":"<img  class='center-block tamano100' src='<?php echo base_url().'public/images/icons/test/test.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Este es un desafío completado",
                "imagen":"<img class='center-block tamano100' src='<?php echo base_url().'public/images/icons/test/testHecho.png'?>'>"},
            {"titulo":"<span class='glyphicon glyphicon-ok'></span> Al comprar tu verdura esta se desbloquea cambiando de color",
                "imagen":"<img class='gris center-block tamano100' src='<?php echo base_url().'public/images/icons/verduras/salad.png'?>'><img class='center-block tamano100' src='<?php echo base_url().'public/images/icons/verduras/salad.png'?>'>"}
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
